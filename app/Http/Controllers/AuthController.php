<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            'title' => 'Login',
            'css' => '/css/auth/login.css',
            'status' => 'auth'
        ];

        return view('/login', $data);
    }
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|max:20'
        ]);

        if (Auth::guard('admin')->attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        if (Auth::guard('resepsionis')->attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            return redirect()->intended('/resepsionis');
        }
        return redirect('/login')->with('gagal', 'Username atau password salah');
    }
    public function logout(Request $request)
    {
        if (Auth::guard('admin')) {
            Auth::guard('admin')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');
        }
        if (Auth::guard('resepsionis')) {
            Auth::guard('resepsionis')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');
        }
    }
}
