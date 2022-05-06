<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Home',
            'css' => '/css/tamu/home.css',
            'status' => 'tamu'
        ];

        return view('/tamu/home', $data);
    }
    public function fasilitas()
    {
        $data = [
            'title' => 'Fasilitas',
            'css' => '/css/tamu/fasilitas.css',
            'fasilitas' => FasilitasHotel::all(),
            'status' => 'tamu'
        ];

        return view('/tamu/fasilitas', $data);
    }
}
