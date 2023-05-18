<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function uslogin(){
        return view('auth.login');
    }

    public function user_submit(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return view('Landing.layouts.landing_master');
        } else {
            dd(Auth);
            return view('auth.login');
        }
    }



    public function userlogout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
