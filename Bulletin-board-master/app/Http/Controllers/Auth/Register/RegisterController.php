<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\User;

class RegisterController extends Controller
{
    //
    public function registerView()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {

            $user_get = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
            //dd($user_get);


            $user = User::findOrFail($user_get->id);
            return redirect()->route('loginView');
        }

}
