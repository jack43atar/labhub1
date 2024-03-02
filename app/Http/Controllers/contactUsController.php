<?php

namespace App\Http\Controllers;

use App\ConatctUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class contactUsController extends Controller
{
    public function index(Request $request)
    {
        $validator = validator::make($request->all(), [
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'phone' => 'required|numeric',
            // 'phone' => 'required|min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'company_name' => 'required|string||max:50',
            'comment' => 'required|string|max:255',
            'g-recaptcha-response' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('contact-us')
                ->withErrors($validator)
                ->withInput();
        }
        $conatctUs = new ConatctUs();
        $conatctUs->first_name = $request->first_name;
        $conatctUs->last_name = $request->last_name;
        $conatctUs->email = $request->email;
        $conatctUs->phone = $request->phone;
        $conatctUs->company_name = $request->company_name;
        $conatctUs->comment = $request->comment;
        $conatctUs->save();
        return view('contactUs/index');
    }
}
