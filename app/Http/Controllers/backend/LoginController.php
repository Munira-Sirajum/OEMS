<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
   // public function login(){
        //return view('backend.login.login');
   // }
   
    public function log(Request $request){

        // $credentials = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];

        // if (Auth::attempt($credentials)) {
        //         return redirect()->route('home')->with('success', 'Your Account is Deactivated.');
        // }
        // return redirect()->back()->with('error', 'Invalid User Credentials');

        $credentials = $request->only('email', 'password');
            // dd($credentials);
        if (Auth::attempt($credentials) ) {            
            return redirect()->route('home');                

        }
        Auth::logout();
        return redirect()->back()->with('error', 'Please try agein.');
    }
}

