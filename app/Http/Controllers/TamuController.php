<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use App\Models\Kamar;
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
    public function kamar()
    {
        $data = [
            'title' => 'Fasilitas',
            'css' => '/css/tamu/kamar.css',
            'kamar' => Kamar::all(),
            'status' => 'tamu'
        ];

        return view('/tamu/kamar', $data);
    }
}
