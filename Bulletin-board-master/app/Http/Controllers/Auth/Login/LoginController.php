<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //

    public function loginView()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $userdata = $request -> only
        ('email', 'password');
        //dd($userdata);
        if (Auth::attempt($userdata))
          {
            return redirect('/post_create');
        }else{
            return redirect('/login')->with('flash_message', 'name or password is incorrect');
        }
    }
}
