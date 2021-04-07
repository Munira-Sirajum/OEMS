<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SignController extends Controller
{
    //
    public function sign(){
        return view('fontend.sing');
    }

    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');


        // dd(bcrypt('123'));
        // bcrypt()
       

        if (Auth::attempt($credentials)) {
            if (auth()->user()->status == 'Active' && auth()->user()->role == 'Student') {

                return redirect()->route('main');
            }
            else if (auth()->user()->status == 'Active' && auth()->user()->role == 'Professor') {
                return redirect()->route('home');
            }
            else{
                Auth::logout();
            return redirect()->back()->with('error', 'Your Account is Deactivated.');
            }
        }
        return redirect()->back()->with('error', 'Invalid User Credentials');
    }

    public function logout()
    {
            Auth::logout();
            return redirect()->route('sign')->with('message', 'Successfully logged out.');
    }
}
