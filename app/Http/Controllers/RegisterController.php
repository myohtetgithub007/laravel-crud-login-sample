<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view("auth.create");
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm-password' => 'required',

        ]);
        $user = new User();
        $user->name =  $request->get('name');
        $user->email =  $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();
        // Auth::login($reg);
        // return redirect('/');
        // $user = User::create($validatedData);
        Auth::login($user);
        return redirect('/');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
