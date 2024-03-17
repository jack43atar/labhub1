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
        $user_id = $request->user_id;
        $item_id = $request->id;
        $exist = DB::table('cart')->where(array('user_id'=>$user_id,'item_id'=>$item_id,'paid'=>0))->count();
        if($exist==0){
            $data = array(
                "user_id" => $user_id,
                "item_id"=>$item_id
            );
            DB::table('cart')->insert($data);
        }
        $number = DB::table('cart')->where(array('user_id'=>$user_id,'paid'=>0))->count();
        print_r(json_encode($number));

    }
}
