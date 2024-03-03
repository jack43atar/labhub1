<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
  
        // $filename = "australia.csv";
        // // In case the uploaded file path is to be stored in the database 
        // $filepath = public_path("csvs/" . $filename);
        // // Reading file
        // $file = fopen($filepath, "r");
        // $importData_arr = array(); // Read through the file and store the contents as an array
        // $i = 0;
        // //Read the contents of the uploaded file 
        // while (($filedata = fgetcsv($file, 3000, ",")) !== FALSE) {
        //     $num = count($filedata);
        //     // Skip first row (Remove below comment if you want to skip the first row)

        //     for ($c = 0; $c < $num; $c++) {
        //         $importData_arr[$i][] = $filedata[$c];
        //     }
        //     $i++;
        // }
        // fclose($file); //Close after reading
        // $j = 0;
        
        // foreach ($importData_arr as $importData) {
        //     $j++;
            
    
        //             $data = array(
        //                 'lab_name' => $importData[0],
        //                 'country' => $importData[14],
        //                 'accreditation' => $importData[3],
        //                 'city' => $importData[11],
        //                 'contact' => $importData[6],
        //                 'contact_title' => $importData[7],
        //                 'email_address' => $importData[15],
        //                 'address' => $importData[8],
        //                 'website' => "www.".explode("@",$importData[15])[1],
        //                 'status' => '1',
        //                 'price_day' => 1750,
        //                 'processing_fee' =>0,
        //                 'total_price' => 1750,
        //                 'currency' => 1,
        //                 'test_site' => NULL
        //             );
        //             $res = DB::table('lab_types')->insert($data); 
        //             // $data= array(
        //             //     'firm_name' => $importData[0],
        //             //     'location' => $importData[1],
        //             //     'accreditation' => $importData[3],
        //             //     'mra' => $importData[4],
        //             //     'designation_number' => $importData[5],
        //             //     'expiration_date' => $importData[2],
        //             //     'contact' => $importData[6],
        //             //     'contact_title' => $importData[7],
        //             //     'address' => $importData[8],
        //             //     'po_box' => $importData[9],
        //             //     'mail_stop' => $importData[10],
        //             //     'city' =>$importData[11],
        //             //     'state' => $importData[12],
        //             //     'zip' => $importData[13],
        //             //     'country' => $importData[14],
        //             //     'email_address' => $importData[15],
        //             //     'phone_number' => $importData[16],
        //             //     'fax_number' => $importData[17],
        //             //     'contract' => 'Y',
        //             // );
        //             // $res = DB::table('results')->insert($data); 


        // }
        // return response()->json([
        //     'message' => "$j records successfully uploaded"
        // ]);
     
        // die();
        return view('home');
    }
	
	public function homeSearch(Request $request)
    {
        try {
            $search = $request->search;
            if ($search != '' && $search != null) {
                $query = DB::table('home_search')
                    ->where('company_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('title', 'LIKE', '%' . $search . '%')
                    ->orWhere('standard', 'LIKE', '%' . $search . '%');
                $executeQuery = $query->get();
                $searchCount = count($executeQuery);
                if (count($executeQuery) > 0) {
                    return view('homeSearch', compact('searchCount', 'search', 'executeQuery'));
                } else {
                    return view('homeSearch', compact('searchCount', 'search'));
                }
            } else {
                return view('home');
            }
        } catch (\Throwable $e) {
            echo "Error : " . $e->getMessage();
        }
    }
}
