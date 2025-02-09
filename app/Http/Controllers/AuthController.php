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
        $email = $request->email;
        $username = $request->username;
        $password = $request->password;

        // Hash password sebelum menyimpan ke database
        $hashedPassword = bcrypt($password);

        User::create([
            'email' => $email,
            'name' => $username,
            'password' => $password,
            'role' => 'user'
        ]);

        return redirect()->route('login');
    }

    public function submitLogin(Request $request){
        $email = $request->email;
        $password = $request->password;

        // Coba melakukan login
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Simpan email pengguna ke dalam session
            session(['user_email' => $email]);

            // Redirect berdasarkan role
            if (Auth::user()->role == 'user') {
                return redirect('/');
            } else if (Auth::user()->role == 'admin') {
                return redirect('/admin');
            }
        }
        return redirect()->back()->withErrors([]);
    }
    public function logout(Request $request)
{
    // Hapus session user_email
    $request->session()->forget('user_email');

    // Logout user
    Auth::logout();

    // Redirect ke halaman login dengan pesan sukses
    return redirect()->route('login');
}
}