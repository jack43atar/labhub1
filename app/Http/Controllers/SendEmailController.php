<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function send(Request $request)
    {
        dd(2131);
        $data = $this->validate($request, [
            'name'      =>  'required',
            'email'     =>  'required|email',
            'message'   =>  'required'
        ]);

        Mail::to('asd@asd')->send(new SendMail($data));

        return redirect()->route('home')->with('mail_message', 'success');
    }
}
