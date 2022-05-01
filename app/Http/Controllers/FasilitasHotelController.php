<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
    public function tambah_fasilitas()
    {
        $data = [
            'title' => 'Tambah fasilitas hotel',
            'status' => 'admin'
        ];

        return view('/admin/create/fasilitas-hotel', $data);
    }
    public function edit_fasilitas(FasilitasHotel $fasilitas)
    {
        $data = [
            'title' => 'Edit fasilitas hotel',
            'fasilitas' => $fasilitas,
            'status' => 'admin'
        ];

        return view('/admin/edit/fasilitas-hotel', $data);
    }
    public function create(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'image' => 'image|file|max:5000',
            'detail' => 'required'
        ]);
        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('fasilitas-hotel');
        }

        FasilitasHotel::create($validateData);

        return redirect('/admin/fasilitas-hotel')->with('success', 'Fasilitas hotel berhasil di tambahkan');
    }
    public function destroy(Request $request)
    {
        $fasilitas = FasilitasHotel::where('id', $request->id)->get();
        Storage::delete($fasilitas[0]['image']);
        FasilitasHotel::destroy($request->id);

        return redirect('/admin/fasilitas-hotel')->with('success', 'Fasilitas hotel berhasil di hapus');
    }
    public function update(Request $request, FasilitasHotel $fasilitas)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            'image' => 'image|file|max:5000'
        ]);

        if ($request->file('image')) {
            Storage::delete($fasilitas->image);
            $validateData['image'] = $request->file('image')->store('fasilitas-hotel');
        } else {
            $validateData['image'] = $fasilitas->image;
        }

        FasilitasHotel::where('id', $fasilitas->id)
            ->update($validateData);

        return redirect('/admin/fasilitas-hotel')->with('success', 'Fasilitas hotel berhasil di edit');
    }
}
