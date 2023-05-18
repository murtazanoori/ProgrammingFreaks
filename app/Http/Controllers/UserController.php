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
        $crediantials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($crediantials)) {
            return view('Landing.layouts.landing_master');
        } else {
            dd('else');
            return view('auth.login');
        }
    }



    public function userlogout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
