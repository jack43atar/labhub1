<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{
    public function index(){
        $title = 'Tracking Test';
        return view('site.track', compact('title'));
    }
    public function track(Request $request)
    {
        $uuid=$request->uuid;
        $company=$uuid['company'];
        
        if($company==-1||$company==null) {
            $company_name=null;
            $company_domain=null;
            $is_person=1;
        }
        else{
            $company_name=$company['name'];
            $company_domain=$company['domain'];
            $is_person = 0;
        }
        
        $tracks = DB::table('tracks')->where('uuid',$uuid['uuid'])->get();
        if(count($tracks)==0){
            $data=array(
                'uuid'=>$uuid['uuid'],
                'company_name'=>$company_name,
                'company_domain'=>$company_domain,
                'is_person'=>$is_person
            );
            $res = DB::table('tracks')->insert($data);
            print_r(json_encode(1));
        }else{
            print_r(json_encode(0));
        }
    }

}