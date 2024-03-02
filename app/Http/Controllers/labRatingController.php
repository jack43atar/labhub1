<?php

namespace App\Http\Controllers;

use App\submitListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class labRatingController extends Controller
{
    public function index()
    {
        $title = "Lab Ratings/Directory";
        $data = DB::table('Results')->select('country')->distinct()->get();
        $country = [];
		$itemCount = '';
       // foreach ($data as $key => $value) {
         //   $country[] = $value;
       // }
       // return view('labRating.index', compact('country', 'title','itemCount'));
		
		
		foreach ($data as $index => $value) {
            $country[] = (object) ['country' => $value->country, 'index' => $index];
        }

        return view('labRating.index', compact('country', 'title'));
    }
    public function submit_listing()
    {
        $title = "Submit Listing";
        $cityListing = DB::table('Results')->select('city')->distinct()->get()->toArray();
        return view('labRating.submitListing', compact('cityListing', 'title'));
    }

    public function view_listing()
    {
        $title = "View Listings";
		$itemCount = '';
        $viewListing = DB::table('Results')->paginate(10);
        return view('labRating.viewListing', compact('viewListing', 'title', 'itemCount'));
    }
    public function submit_listing_add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'businessName' => 'required',
            'city' => 'required',
            'shortBusinessDesc' => 'required',
            'longBusinessDesc' => 'required',
            'businessStreetAddress' => 'required',
            'businessCity' => 'required',
            'businessState' => 'required',
            'businessZIP' => 'required|Numeric',
            'businessCountry' => 'required',
            'businessURL' => 'required',
            'businessPhoneNumber' => 'required|Numeric',
            'businessFax' => 'required|Numeric',
            'businessContactEmail' => 'required',
            'accreditingBody' => 'required',
            'testFacility' => 'required',
            'testCategory' => 'required',
            'testStandard' => 'required',
            'certification' => 'required',
            'file' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
        ]);
        if ($validator->fails()) {
            return redirect('lab-rating-directory/submit-listing')
                ->withErrors($validator)
                ->withInput();
        }
        $cityListing = DB::table('Results')->select('city')->distinct()->get()->toArray();
        if ($request->file()) {
            $fileName = time() . '.' . $request->file->extension();
            $type = $request->file->getClientMimeType();
            $size = $request->file->getSize();
            $request->file->move(public_path('file'), $fileName);
        }
        $submitListing = new submitListing();
        $submitListing->businessName = $request->businessName;
        $submitListing->shortBusinessDesc = $request->shortBusinessDesc;
        $submitListing->city = $request->city;
        $submitListing->longBusinessDesc = $request->longBusinessDesc;
        $submitListing->businessStreetAddress = $request->businessStreetAddress;
        $submitListing->businessCity = $request->businessCity;
        $submitListing->businessState = $request->businessState;
        $submitListing->businessZIP = $request->businessZIP;
        $submitListing->businessCountry = $request->businessCountry;
        $submitListing->businessURL = $request->businessURL;
        $submitListing->linkTextOpt = $request->linkTextOpt;
        $submitListing->businessPhoneNumber = $request->businessPhoneNumber;
        $submitListing->businessFax = $request->businessFax;
        $submitListing->businessContactEmail = $request->businessContactEmail;
        $submitListing->accreditingBody = $request->accreditingBody;
        $submitListing->testFacility = $request->testFacility;
        $submitListing->testCategory = $request->testCategory;
        $submitListing->testStandard = $request->testStandard;
        $submitListing->certification = $request->certification;
        $submitListing->file = $request->file;
        $submitListing->save();
        return view('labRating.submitListing', compact('cityListing'))->with('success', 'Data added successfully');
    }
    // public function fetchCountry(Request $request)
    // {
    //     $stateQuery = DB::table('Results')->where('country', $request->country)->get();
    //     return view('labRating.index', compact('stateQuery'));
    // }
	
	/*
     * @return search value
     */
    public function search(Request $request)
    {
        $viewListing = DB::table('Results')->paginate(10);
        $search = $request->search;
		$itemCount = '';
        if ($search != '' && $search != null) {
            $query = DB::table('Results')
                ->where('firm_name', 'LIKE', '%' . $search . '%')
                ->orWhere('city', 'LIKE', '%' . $search . '%')
                ->orWhere('country', 'LIKE', '%' . $search . '%');
			$count = count($query->get());
            $data = $query->paginate(5);
            if (count($data) > 0) {
                return view('labRating.viewListing', compact('data','count','itemCount'))->withDetails($data)->withQuery('search');
            } else {
                return view('labRating.viewListing', compact('data','itemCount'))->withMessage('No Details found. Try to search again !');
            }
        } else {
            return view('labRating.viewListing', compact('viewListing','itemCount'));
        }
    }
	
	public function fetchCountry($country)
    {
        $cities = DB::table('Results')->where('country', $country)->distinct()->pluck('city');
        return response()->json(['country' => $country /*, 'cityCount' => $cityCount*/, 'cities' => $cities]);
    }
	
    public function fetchCity($city)
    {
       	$labData = DB::table('Results')->where('city', $city)->get();
        return response()->json(['city' => $city, 'data' => $labData]);
    }
	
	public function certificationTesting(Request $request)
    {
        dd("Work In Progress");
    }
	
	public function preCertificationTesting(Request $request)
    {
        try {
            $viewListing = DB::table('Results')->paginate(10);
            $inputData = $request->except('_token');
            $itemCount = 0;
            foreach ($inputData as $fieldName => $fieldValue) {
                if (!empty($fieldValue)) {
                    $itemCount++;
                }
            }
            return view('labRating.viewListing', [
                'viewListing' => $viewListing,
                'itemCount' => $itemCount,
            ]);
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
