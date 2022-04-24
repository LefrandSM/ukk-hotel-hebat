<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasHotel;

class FasilitasHotelController extends Controller
{
    public function fasilitas()
    {
        $data = [
            'title' => 'Fasilitas hotel',
            'fasilitas' => FasilitasHotel::all(),
            'status' => 'admin'
        ];

        return view('/admin/fasilitas-hotel', $data);
    }
}
