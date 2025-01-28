<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function admin(Request $request){
     return view('admin');   
    }
    public function submitRegister(Request $request){
        
        $email=$request->email;
        $username=$request->username;
        $password=$request->password;

        User::create([
            'email' => $email,
            'name' => $username,
            'password' => $password,
            'role' => 'user'
        ]);

        return redirect()->route('login');
    }

    public function submitLogin(Request $request){
        $email=$request->email;
        $password=$request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            if(Auth::user()->role == 'user'){
                return redirect('/dashboard');
            }
            else if(Auth::user()->role =='admin'){
                return redirect('/admin');
            }
        }
        return redirect()->back();
    }
}
