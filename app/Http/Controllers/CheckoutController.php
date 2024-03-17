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
    public function setcart(Request $request){
        $user_id = $request->userId;
        $price = $request->price;
        $item_id = '1';
        $count = '1';
        $data = array(
            "user_id" => $user_id,
            "price" => $price,
            "count" => $count,
            "item_id"=>$item_id
        );
        DB::table('cart')->insert($data);
        // get count
        // $cartcount = DB::table('cart')->select('count')->count();
        // return view('site.store',compact('cartcount'));
    }
}
