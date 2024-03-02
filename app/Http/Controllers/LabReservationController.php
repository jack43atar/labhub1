<?php

namespace App\Http\Controllers;

use App\bookingInformation;
use App\Http\Requests\LabReservation\labReservationAllFormWithPaymentRequest;
use App\Http\Requests\LabReservation\LabReservationStepTreRequest;
use App\LabReservation;
use App\LabType;
use App\Payment;
use App\ProductDescription;
use App\ServicePreference;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class LabReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        dd(222);
//        $title = 'Lav Reservation';
//
//        return view('site.lab_reservation', compact('title'));
    }

    public function labReservationOne()
    {
        $title = 'Lab Reservation';
        $lab_types = LabType::all();


        return view('site.lab_reservation.lab_reservation_step_one', compact('title', 'lab_types'));
    }

    public function getLabTypes(Request $request)
    {

        if(strpos($request->path, 'lab-reservation/booking') !== false ){
            $lab_types = LabType::all();

            return response()->json($lab_types);
        } else
        {
            return response()->json(null);
        }
    }

    public function labReservationTwo(Request $request)
    {

        $title = 'Lab Reservation';
        $data = array_merge(array_merge( session()->get('stepOneData') , ['service_preferences' => ServicePreference::all()->toArray() ] ),
            ['product_descriptions' => ProductDescription::all()->toArray() ]
            );
        $user = Auth::user();

        return view('site.lab_reservation.lab_reservation_step_two', compact('title', 'data', 'user'));
    }

    public function labReservationOneAjax(Request $request)
    {
//        dd($request->all());
        $validatedData = $request->validate([
            'start_date'        => 'required|date_format:d/m/Y',
            'end_date'          => 'required|date_format:d/m/Y',
            'full_or_part'      => 'required',
            'lab_type_id'       => 'required',
            'country'           => ['required', Rule::in(LabReservation::KEY_COUNTRIES)],
        ]);
        $lab_type   = LabType::find($request['lab_type_id']);
        $start_date = Carbon::createFromFormat('d/m/Y', $request['start_date']);
        $end_date   = Carbon::createFromFormat('d/m/Y', $request['end_date']);

        $data = [
            'start_date'     => $start_date->format('Y-m-d'),
            'end_date'       => $end_date->format('Y-m-d'),
            'diff_days'      => $start_date->diffInDays(($end_date)),
            'full_or_part'   => $request['full_or_part'],
            'lab_type_name'  => $lab_type->lab_name,
            'currency'       => LabType::CURRENCIES_FOR_VIEW[$lab_type->currency],
            'lab_type_id'    => $request['lab_type_id'],
            'country'        => $request['country'],
        ];


        if ($request['full_or_part'] == 'Full') {
            $data['total_price'] = $data['diff_days'] * $lab_type->total_price;
        } else {
            $data['total_price'] = $data['diff_days'] * $lab_type->total_price / 2;
        }

        $request->session()->put('stepOneData', $data);

        return 'success';
    }

    public function labReservationAllFormWithPayment(labReservationAllFormWithPaymentRequest $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_RXsw1LH4DYyLVwoCHJMWLldY0009Iebsdf');
        $token = $_POST['stripeToken'];


        $step_two_data = $request->all();
        unset($step_two_data['_token']);
        $request->session()->put('stepTwoData', $step_two_data);

        $session_data           = session()->all()['stepOneData'];
        $stripe                 = \Stripe\Token::retrieve($token)->toArray();
        $service_preferences    = ServicePreference::findMany($step_two_data['service_preferences'])->toArray();
        $product_descriptions   = ProductDescription::findMany($step_two_data['product_descriptions'])->toArray();

//        dd($step_two_data);

        if (strlen($stripe['card']['exp_month']) == 1) {
            $month = 0 .$stripe['card']['exp_month'];
        } else $month = 0 .$stripe['card']['exp_month'];

        $data = array_merge ($session_data ,[
            'card_brand'            => $stripe['card']['brand'],
            'card_holder'           => $step_two_data['name'],
            'card_last4'            => $stripe['card']['last4'],
            'card_mm_yy'            => $month .'/'. substr($stripe['card']['exp_year'], -2),
            'cvv'                   => '***',
            'lab_type_name'         => $session_data['lab_type_name'],
            'service_preferences'   => $service_preferences,
            'product_descriptions'  => $product_descriptions,
        ]);

        return view('site.lab_reservation.lab_reservation_step_three', compact('data'));


//        $charge = \Stripe\Charge::create([
//            'amount' => session()->all()['stepOneData']['lab_total'],
//            'currency' => 'usd',
//            'description' => 'Example charge',
//            'source' => $token,
//            'statement_descriptor' => 'Custom descriptor',
//        ]);
//        $title = 'Lav Reservation';
//        $data = session()->get('stepOneData');
//        $user = Auth::user();
//        return view('site.lab_reservation.lab_reservation_step_two', compact('title', 'data', 'user'));
    }

    public function payment(Request $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_RXsw1LH4DYyLVwoCHJMWLldY0009Iebsdf');

        $token      = session()->get('stepTwoData')['stripeToken'];
        $currency   = session()->get('stepOneData')['currency'];
        $amount     = session()->get('stepOneData')['total_price'].'00';

        $labReservationData = [
            'user_id'                   => Auth::id(),
            'lab_type_id'               => session()->get('stepOneData')['lab_type_id'],
            'start_date'                => session()->get('stepOneData')['start_date'],
            'end_date'                  => session()->get('stepOneData')['end_date'],
            'full_part'                 => session()->get('stepOneData')['full_or_part'],
            'days'                      => session()->get('stepOneData')['diff_days'],
            'description'               => session()->get('stepTwoData')['description'],
            'company_contact_f_name'    => session()->get('stepTwoData')['company_contact_f_name'],
            'company_contact_l_name'    => session()->get('stepTwoData')['company_contact_l_name'],
            'company_address'           => session()->get('stepTwoData')['address'],
            'company_city'              => session()->get('stepTwoData')['city'],
            'company_state'             => session()->get('stepTwoData')['province_state'],
            'company_country'           => session()->get('stepTwoData')['country'],
            'company_zip_code'          => session()->get('stepTwoData')['zip_code'],
            'reservation_email'         => session()->get('stepTwoData')['reservation_email'],
            'total_price'               => session()->get('stepOneData')['total_price'],
        ];

        $labReservation = LabReservation::create($labReservationData);

        $bookingData = [
            'lab_id'        => $labReservation->id,
            'email'         => session()->all()['stepTwoData']['booking_email'],
            'fax_number'    => session()->all()['stepTwoData']['booking_fax_number'],
            'phone_one'     => session()->all()['stepTwoData']['booking_phone_one'],
            'phone_two'     => session()->all()['stepTwoData']['booking_phone_two'],
        ];

        $bookingInformation = BookingInformation::create($bookingData);

        $labReservation->servicePreferences()->attach((session()->all()['stepTwoData']['service_preferences']));
        $labReservation->productDescriptions()->attach((session()->all()['stepTwoData']['product_descriptions']));

        $charge = \Stripe\Charge::create([
            'amount'                => (int) $amount,
            'currency'              => $currency,
            'description'           => 'Example charge',
            'source'                => $token,
            'statement_descriptor'  => 'Custom descriptor',
        ]);

        $paymentsData = [
            'user_id'           => Auth::id(),
            'currency'          => $charge->toArray()['currency'],
            'amount'            => $charge->toArray()['amount'],
            'name'              => session()->get('stepTwoData')['name'],
            'postal_code'       => $charge->toArray()['billing_details']['address']['postal_code'],
            'network_status'    => $charge->toArray()['outcome']['network_status'],
            'brand'             => $charge->toArray()['source']['brand'],
            'exp_month'         => $charge->toArray()['source']['exp_month'],
            'exp_year'          => $charge->toArray()['source']['exp_year'],
            'last4'             => $charge->toArray()['source']['last4'],
            'receipt_url'       => $charge->toArray()['receipt_url'],
            'source_id'         => $charge->toArray()['source']['id'],
            'address_zip'       => $charge->toArray()['source']['address_zip'],
            'status'            => $charge->toArray()['status'],
        ];

        $labReservation->payments()->create($paymentsData);

        if ($charge->toArray()['status'] == 'succeeded') {
            $labReservation->update([
                'status'    => LabReservation::STATUS['succeeded'],
            ]);
        }

        session()->forget('stepOneData');
        session()->forget('stepTwoData');
        dd(session()->all());
        return 'success';
    }

    public function labReservationTree(LabReservationStepTreRequest $request)
    {
        dd($request->all());


    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(LabReservation $labReservation)
    {
        //
    }

    public function edit(LabReservation $labReservation)
    {
        //
    }

    public function update(Request $request, LabReservation $labReservation)
    {
        //
    }

    public function destroy(LabReservation $labReservation)
    {
        //
    }

    public function stepOne()
    {

    }
}