<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Tamu;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function store(Request $request)
    {
        $validateDataTamu = $request->validate([
            'nama_pemesan' => ['required', 'max:50'],
            'email' => 'required',
            'no_hp' => 'required',
            'nama_tamu' => ['required', 'max:50']
        ]);

        Tamu::create($validateDataTamu);

        $tamu = Tamu::latest()->first();

        $validateDataReservasi = $request->validate([
            'jml_kamar' => 'required',
            'check_in' => 'required',
            'check_out' => 'required'
        ]);

        Reservasi::create([
            'tamu_id' => $tamu->id,
            'jml_kamar' => $validateDataReservasi['jml_kamar'],
            'tipe_kamar' => $request->tipe_kamar,
            'check_in' => $validateDataReservasi['check_in'],
            'check_out' => $validateDataReservasi['check_out']
        ]);


        $reservasi = Reservasi::latest()->first();

        Tamu::where('id', $tamu->id)
            ->update(['reservasi_id' => $reservasi->id]);

        return redirect('/')->with('success', 'Pesanan telah di buat');
    }
}
