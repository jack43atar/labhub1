<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index(){
        return view('site.checkout');
    }
    public function toastnotification(Request $request) {
        $name = $request->name;
        $price = $request->price;
        return view('site.store',compact('name','price'));
    }
}
