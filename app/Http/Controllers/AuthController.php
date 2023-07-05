<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        // code here
        $validatedData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($validatedData)){
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Login berhasil');
        }

        return back()->withErrors([
            'email' => 'Email tidak terdaftar'
        ]);
    }

    public function register(Request $request) {
        // code here
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'confirm-password' => 'required|same:password',
        ]);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi berhasil!');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
