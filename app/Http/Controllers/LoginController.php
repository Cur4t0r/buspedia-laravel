<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login", [
            "title" => "Masuk"
        ]);
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        
        return back()->with('login_error', 'Gagal Masuk');
        
        // return back()->withErrors([
        //     'username' => 'Username tidak terdaftar',
        //     'password' => 'Pasword salah'
        // ]);
    }

    public function logout(Request $request)
    {
        auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
