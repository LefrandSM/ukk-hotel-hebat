<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Models\Reservasi;
use App\Models\Tamu;
use Illuminate\Http\Request;

class ResepsionisController extends Controller
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'reservasi' => Reservasi::all(),
            'terbaru' => Reservasi::latest()->first(),
            'status' => 'resepsionis'
        ];

        return view('/resepsionis/dashboard', $data);
    }
    public function fasilitas()
    {
        $data = [
            'title' => 'Fasilitas Kamar',
            'fasilitas' => FasilitasKamar::all(),
            'status' => 'resepsionis'
        ];

        return view('/resepsionis/fasilitas-kamar', $data);
    }
    public function reservasi()
    {
        $data = [
            'title' => 'Reservasi',
            'reservasi' => Reservasi::latest()->filter()->with('tamu')->get(),
            'status' => 'resepsionis'
        ];


        return view('/resepsionis/reservasi', $data);
    }
}
