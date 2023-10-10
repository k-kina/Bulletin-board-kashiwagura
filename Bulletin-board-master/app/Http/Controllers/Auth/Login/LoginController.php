<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function loginView()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $userdata = $request -> only('mail_address', 'password');
        if (Auth::attempt($userdata)) {
            return redirect('/top');
        }else{
            return redirect('/login')->with('flash_message', 'name or password is incorrect');
        }
    }
}
