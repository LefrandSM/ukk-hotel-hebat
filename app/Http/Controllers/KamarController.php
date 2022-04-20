<?php

namespace App\Http\Controllers;
use App\Models\Kamar;
use App\Models\FasilitasKamar;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function kamar()
    {
        $data = [
            'title' => 'Kamar',
            'kamar' => Kamar::get(),
            'status' => 'admin'
        ];

        return view('admin/kamar', $data);
    }
    public function tambah_kamar()
    {
        $data = [
            'title' => 'Tambah Kamar',
            'fasilitas_kamar' => FasilitasKamar::get(),
            'status' => 'admin'
        ];

        return view('admin/create/kamar', $data);
    }
    public function edit_kamar(Kamar $kamar)
    {
        $data = [
            'title' => 'Edit Kamar',
            'kamar' => $kamar,
            'fasilitas_kamar' => FasilitasKamar::get(),
            'status' => 'admin'
        ];

        return view('admin/edit/kamar', $data);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'fasilitas_id' => 'required',
            'tipe_kamar' => 'required',
            'jml_kamar' => 'required'
        ]);


        Kamar::create($validateData);

        return redirect('/admin/kamar')->with('success', 'Kamar baru di tambahkan!');
    }
    public function destroy(Request $request)
    {
        Kamar::destroy($request->id);

        return redirect('/admin/kamar')->with('success', 'Kamar berhasil di hapus!');
    }
}
