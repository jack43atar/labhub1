<?php

namespace App\Http\Controllers;

use App\Business;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function indexBusiness()
    {
        return view('loginBusiness');
    }
    public function login(LoginRequest $request)
    {
        
        if ($request['type'] == User::TYPES['user']) {
            if (Auth::attempt([
                'type'      => User::TYPES['user'],
                'email'     => $request['email'],
                'password'  => $request['password'],
            ]))
            {
                return redirect()->route('home');
            }
            // print_r("wrong");die();
            return redirect()->back()->with('message', 'email or password do not match.');
        }
        elseif ($request['type'] == User::TYPES['business'])  {
            if (Auth::attempt([
                'type'      => User::TYPES['business'],
                'email'     => $request['email'],
                'password'  => $request['password'],
            ]))
            {
                return redirect()->route('home');
            }

            return redirect()->back()->with('message', 'email or password do not match.');
        }
        else

        return redirect()->back()->with('message', 'email or password do not match.');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);

        if($data['type'] == User::TYPES['business']) {
            $user = User::create([
                'name'      => $data['company_name'],
                'email'     => $data['email'],
                'password'  => $data['password'],
                'type'      => User::TYPES['business'],
            ]);


            Business::create([
                'user_id'       => $user->id,
                'company_name'  => $data['company_name'],
                'role'          => $data['role'],
            ]);

            return view('loginBusiness')->with('email', $user->email);
        }
        else {
            $user = User::create($data);

            return view('login')->with('email', $user->email);
        }

    }
    public function reset(Request $request)
    {

        $data= $request->all();

        $data['password'] = Hash::make($data['password']);

        if($data['type'] == User::TYPES['business']) {

            $user = User::where('email', $data['email'])
                ->where('type', $data['type'])
                ->update(['password' => $data['password']]);
            return view('loginBusiness')->with('email', $data['email']);
        }
        else {

            $user = User::where('email', $data['email'])
                ->where('type', $data['type'])
                ->update(['password' => $data['password']]);

            return view('login')->with('email', $data['email']);
        }

    }
    public function logout() {
        auth()->logout();

        return redirect()->route('userLogin');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
