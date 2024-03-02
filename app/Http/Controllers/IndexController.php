<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
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
