<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public function submitRegister(Request $request){
        
        $email=$request->email;
        $username=$request->username;
        $password=$request->password;

        User::create([
            'email' => $email,
            'name' => $username,
            'password' => $password,
        ]);

        return redirect()->route('login');
    }

    public function submitLogin(Request $request){
        $email=$request->email;
        $password=$request->password;
        return redirect()->route('dashboard');
    }
}
