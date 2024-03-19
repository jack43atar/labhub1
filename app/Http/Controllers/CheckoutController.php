<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index(){
        $items = DB::table('cart')
            ->select('items.photourl','items.name','items.price','cart.count','cart.item_id','cart.id')
            ->join('items','items.id','=','cart.item_id')
            ->get();
        return view('site.checkout',compact('items'));
    }
    public function add(Request $request){
        $count = $request->count;
        $id = $request->item_id;
        $count=(int)$count+1;
        print_r($count." ".$id);
        
        $res = DB::table('cart')->where(array('id'=>$id))->update(array('count' => $count));
        print_r(json_encode($res));
    }
    public function minus(Request $request){
        $count = $request->count;
        $id = $request->item_id;
        $count -= 1;
        DB::table('cart')->where(array('item_id'=>$id))->update(['count' => $count]);
        $current_count = DB::table('cart')->where(array('item_id'=>$id))->select('count');
        print_r(json_encode($current_count));
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
    public function delete(Request $request){
        $id = $request->item_id;
        DB::table('cart')->where('id', $id)->delete();
        print_r(json_encode("ok"));
    }
}
