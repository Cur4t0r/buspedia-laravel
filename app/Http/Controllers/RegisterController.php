<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register", [
            "title" => "Daftar Akun"
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $ValidatedData['password'] = Hash::make($ValidatedData['password']);

        User::create($ValidatedData);

        return redirect('/login')->with('registration_success', 'Proses registrasi berhasil. Silakan masuk!!');
    }
}
