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
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
        $email =  $request->get('email');
        $pa =  $request->get('password');
        if (Auth::attempt(['email' => $email, 'password' => $pa])) {
            return redirect('/dashboard');
        } else {
            return redirect('/login');
        }
    }
    public function admin()
    {
        return view('auth.dashboard');
    }
}
