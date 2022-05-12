<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
