<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view("login.create");
    }
    public function  login(Request $request)
    {
        // $validatedData = $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',

        // ]);
        $email =  $request->get('email');
        $password =  $request->get('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            echo "Hello";
        } else {
            echo "Hellhiuhihiho";
        }
        // $password = $user->password =  $request->get('password');
        // $credentials = $request->only('email', 'password');


        // if (Auth::attempt($credentials)) {
        //     // return view('auth.dashboard');
        //     echo "Hello";
        // }
    }
}
