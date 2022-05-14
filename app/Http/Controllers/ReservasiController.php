<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Tamu;
use App\Models\Kamar;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function detail(Reservasi $reservasi)
    {
        $data = [
            'title' => 'Reservasi Check in',
            'reservasi' => $reservasi,
            'status' => 'resepsionis'
        ];
        return view('/resepsionis/reservasi/reservasi-checkin', $data);
    }
    public function edit(Reservasi $reservasi)
    {
        $data = [
            'title' => 'Edit Reservasi',
            'reservasi' => $reservasi,
            'tipe' => Kamar::all(),
            'status' => 'resepsionis'
        ];

        return view('/resepsionis/reservasi/edit', $data);
    }
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
            'kamar_id' => $request->kamar_id,
            'check_in' => $validateDataReservasi['check_in'],
            'check_out' => $validateDataReservasi['check_out']
        ]);


        $reservasi = Reservasi::latest()->first();

        Tamu::where('id', $tamu->id)
            ->update(['reservasi_id' => $reservasi->id]);

        return redirect('/')->with('success', 'Pesanan telah di buat');
    }
    public function destroy(Request $request)
    {
        Reservasi::destroy($request->id);


        return redirect('/resepsionis/reservasi')->with('success', 'Reservasi berhasil di hapus!');
    }
    public function update(Request $request, Reservasi $reservasi)
    {
        $validateDataTamu = $request->validate([
            'nama_pemesan' => ['required', 'max:50'],
            'email' => 'required',
            'no_hp' => 'required',
            'nama_tamu' => ['required', 'max:50']
        ]);

        Tamu::where('id', $reservasi->tamu->id)
            ->update($validateDataTamu);

        $validateDataReservasi = $request->validate([
            'jml_kamar' => 'required',
            'kamar_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required'
        ]);

        Reservasi::where('id', $reservasi->id)
            ->update($validateDataReservasi);


        return redirect('/resepsionis/reservasi')->with('success', 'Reservasi berhasil di edit');
    }
}
