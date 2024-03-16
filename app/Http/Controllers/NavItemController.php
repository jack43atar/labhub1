<?php

namespace App\Http\Controllers;

use App\LabType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavItemController extends Controller
{
    public function store()
    {
        $title = 'Store';
        $items = DB::table('items')->paginate(12);
        return view('site.store', compact('title','items'));
    }

    // lav Reservation

    public function labReservation()
    {
        $title = 'Lav Reservation';

        return view('site.lab_reservation', compact('title'));
    }
    public function custom(){
        return view('layouts.custom');
    }
    public function custom_save(Request $request){
        $data= $request->data;
        foreach($data as $key=>$value){
            $array = array(
                "name"=>$value['name'],
                "photourl"=>$value['photourl'],
                "price"=>$value['price']
            );
            $res = DB::table('items')->insert($array);
        }
        print_r(1);
    }
    public function labStepTwo()
    {
        $title = 'Lav Reservation';

        return view('site.lab_reservation', compact('title'));
    }

    //product & include

    public function mobilityServices()
    {
        $title = 'Mobility Services';

        return view('site.product_include.mobility-services', compact('title'));
    }
    public function businessMessaging()
    {
        $title = 'Business Messaging';

        return view('site.product_include.business_messaging', compact('title'));
    }
    public function telcronBusinessMessaging()
    {
        $title = 'TELCRON Business Messaging';

        return view('site.product_include.telcron_business_messaging', compact('title'));
    }

    //services

    public function eSource()
    {
        $title = 'Esource';

        return view('site.services.eSource', compact('title'));
    }

    public function consulting()
    {
        $title = 'Consulting';

        return view('site.services.consulting', compact('title'));
    }
    public function emc()
    {
        $title = 'EMC Overview';

        return view('site.services.product_research', compact('title'));
    }
    public function productSafety()
    {
        $title = 'Product Safety';

        return view('site.services.product-safety', compact('title'));
    }
    public function complianceManagement()
    {
        $title = 'Compliance Management';

        return view('site.services.compliance_management', compact('title'));
    }
    public function rfExposure()
    {
        $title = 'RF Exposure';

        return view('site.services.rf_exposure', compact('title'));
    }
    public function referenceLink()
    {
        $title = 'Reference Links';

        return view('site.services.reference-link', compact('title'));
    }
    public function products()
    {
        $title = 'Products';

        return view('site.services.products', compact('title'));
    }
    //contract
    public function contract()
    {
        return view('site.contract.index');
    }
    //about

    public function ourPartners()
    {
        $title = 'Our Partners';

        return view('site.about.our_partners', compact('title'));
    }

    public function ourCapabilities()
    {
        $title = 'Our Capabilities';

        return view('site.about.our_capabilities', compact('title'));
    }

    public function ourTeam()
    {
        $title = 'Our Team';

        return view('site.about.our_team', compact('title'));
    }

    public function blog()
    {
        $title = 'Blog';

        return view('site.about.blog', compact('title'));
    }

    public function blogSamuelJames()
    {
        $title = 'Samson';

        return view('site.about.blog_samuel_james', compact('title'));
    }


    //lab reservation

    public function scheduleTesting()
    {
        $title = 'Schedule Testing';

        return view('site.lab_reservation.schedule_testing', compact('title'));
    }
	
	/**
     * Book Lab Function Start from Here
     * @modal labtypes
     * @table results
     * @return lab_types array
     * @return country array
     */
    public function bookLab()
    {
        $title = 'Lab Reservation';
        $lab_types = LabType::all();
        $data = DB::table('Results')->select('country')->distinct()->get();
        $country = [];
        foreach ($data as $key => $value) {
            $country[] = $value;
        }
        return view('labReservations/index', compact('lab_types', 'country', 'title'));
    }
	
	/**
     * Submit RFQ Function
     * @return View Page path : /submit/index.blade.php
     * @return page title
     * @return view SubmitRFQ index page
     */
    public function submitRFQ()
    {
        $title = 'Submit Device for Certification';
        return view('submitRFQ/index', compact('title'));
    }
	public function rfqDevices()
    {
        $title = "Telcron | Devices";
        return view('submitRFQ/devices', compact('title'));
    }
	public function rfqModules()
    {
        $title = "Telcron | Module";
        return view('submitRFQ/modules', compact('title'));
    }
	public function rfqGetCertified()
    {
        $title = "Testlabhub | Get Certified";
        return view('submitRFQ/getCertified', compact('title'));
    }
	
	public function faqs()
    {
        $title = "Testlabhub | FAQs";
        return view('faq/index', compact('title'));
    }

    public function rewards()
    {
        $title = "Testlabhub | Rewards";
        return view('rewards/index', compact('title'));
    }
	
	public function submitLabReview()
    {
        $title = "Testlabhub | Submit Lab Review";
        return view('submitLabReview/index', compact('title'));
    }
	
	public function contactUs()
    {
        $title = "Testlabhub | Contact Us";
        return view('contactUs/index', compact('title'));
    }

}
