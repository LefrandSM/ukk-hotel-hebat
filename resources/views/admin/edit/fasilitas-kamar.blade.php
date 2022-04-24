@extends('template/layouts')

@section('content')
    <h1 class="display-6 mb-5">Kamar</h1>
    <form method="post" action="/admin/fasilitas-kamar/update/{{ $fasilitas->id }}">
        @method('put')
        @csrf
        <div class="mb-3 row">
          <label for="nama_fasilitas" class="col-sm-2 col-form-label">Nama Fasilitas</label>
          <div class="col-sm-10">
            <input type="text" autocomplete="off" name="nama_fasilitas" value="{{ old('nama_fasilitas', $fasilitas->nama_fasilitas) }}" class="form-control @error('nama_fasilitas') is-invalid @enderror" id="nama_fasilitas">
            @error('nama_fasilitas')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
    <div class="row mb-4">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary mb-5">Edit</button>
        </div>
    </div>
    </form>
@endsection