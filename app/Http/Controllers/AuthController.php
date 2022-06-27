<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Paticipan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login failed..!!');
    }

    public function storeRegister(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/manage-role')->with('success', 'Registration successfuly!!! Please login..');
    }

    public function deleteUser($id)
    {
        User::find($id)->delete();
        Paticipan::where('user_id', $id)->forceDelete();
        Message::where('user_id', $id)->forceDelete();

        return redirect('/manage-role');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
