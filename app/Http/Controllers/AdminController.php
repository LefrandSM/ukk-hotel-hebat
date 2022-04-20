<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'status' => 'admin'
        ];

        return view('admin/dashboard', $data);
    }
    
}
