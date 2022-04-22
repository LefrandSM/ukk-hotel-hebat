<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasKamar;

class FasilitasKamarController extends Controller
{
    public function fasilitas()
    {
        $data = [
            'title' => 'Fasilitas Kamar',
            'fasilitas' => FasilitasKamar::get(),
            'status' => 'admin'
        ];

        return view('admin/fasilitas-kamar', $data);
    }
}
