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
            'kamar' => Kamar::with('fasilitas')->get(),
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
        $kamar = Kamar::with('fasilitas')->get();
        $kamar_fasilitas = $kamar->last();

        $kamar_fasilitas->fasilitas()->attach($validateData['fasilitas_id']);

        return redirect('/admin/kamar')->with('success', 'Kamar baru di tambahkan!');
    }
    public function destroy(Request $request)
    {
        $kamar_fasilitas = Kamar::find($request->id, 'id');

        $kamar_fasilitas->fasilitas()->detach();

        Kamar::destroy($request->id);


        return redirect('/admin/kamar')->with('success', 'Kamar berhasil di hapus!');
    }
    public function update(Request $request, Kamar $kamar)
    {
        $validateData = $request->validate([
            'tipe_kamar' => 'required',
            'jml_kamar' => 'required'
        ]);
        $request->validate(['fasilitas_id' => 'required']);

        // detach menghapus data many to many
        $kamar_fasilitas = Kamar::find($kamar->id, 'id');
        $kamar_fasilitas->fasilitas()->detach();
        // attach menambahkan data many to many
        $kamar_fasilitas = Kamar::find($kamar->id, 'id');

        $kamar_fasilitas->fasilitas()->attach($request->fasilitas_id);

        Kamar::where('id', $kamar->id)
            ->update($validateData);



        return redirect('/admin/kamar')->with('success', 'Kamar berhasil di edit!');
    }
}
