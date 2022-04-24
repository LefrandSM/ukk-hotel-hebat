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
    public function tambah_fasilitas()
    {
        $data = [
            'title' => 'Tambah Kamar',
            'status' => 'admin'
        ];

        return view('admin/create/fasilitas-kamar', $data);
    }
    public function edit_fasilitas(FasilitasKamar $fasilitas)
    {
        $data = [
            'title' => 'Edit fasilitas Kamar',
            'fasilitas' => $fasilitas,
            'status' => 'admin'
        ];

        return view('admin/edit/fasilitas-kamar', $data);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_fasilitas' => 'required'
        ]);

        FasilitasKamar::create($validateData);

        return redirect('/admin/fasilitas-kamar')->with('success', 'Kamar baru di tambahkan!');
    }
    public function destroy(Request $request)
    {
        $kamar_fasilitas = FasilitasKamar::find($request->id, 'id');

        $kamar_fasilitas->kamar()->detach();

        FasilitasKamar::destroy($request->id);


        return redirect('/admin/fasilitas-kamar')->with('success', 'Fasilitas kamar berhasil di hapus!');
    }
    public function update(Request $request, FasilitasKamar $fasilitas)
    {
        $validateData = $request->validate([
            'nama_fasilitas' => 'required'
        ]);

        FasilitasKamar::where('id', $fasilitas->id)
            ->update($validateData);

        return redirect('/admin/fasilitas-kamar')->with('success', 'Fasilitas kamar berhasil di edit!');
    }
}
