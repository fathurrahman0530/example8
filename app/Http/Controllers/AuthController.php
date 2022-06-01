<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function storeLogin()
    {
    }

    public function storeRegister(Request $request)
    {
        $request->validate([
            'fullname' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        dd('Data berhasil divalidation...!!');
    }
}
