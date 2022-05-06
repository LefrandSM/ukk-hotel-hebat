<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\FasilitasHotel;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'kamar' => Kamar::count(),
            'fasilitas_hotel' => FasilitasHotel::count(),
            'status' => 'admin'
        ];

        return view('admin/dashboard', $data);
    }
}
