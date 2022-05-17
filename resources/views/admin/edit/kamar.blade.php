@extends('template/layouts')

@section('content')
    <h1 class="display-6 mb-5">Kamar</h1>
    <form method="post" action="/admin/kamar/update/{{ $kamar->id }}">
        @method('put')
        @csrf
        <div class="mb-3 row">
          <label for="tipe_kamar" class="col-sm-2 col-form-label">Tipe kamar</label>
          <div class="col-sm-10">
          <input type="text" autocomplete="off" name="tipe_kamar" value="{{ old('tipe_kamar', $kamar->tipe_kamar) }}" class="form-control @error('tipe_kamar') is-invalid @enderror" id="tipe_kamar">
          @error('tipe_kamar')
              <p class="text-danger">{{ $message }}</p>
          @enderror
          </div>
      </div>
    <div class="mb-3 row">
        <label for="Jumlah_kamar" class="col-sm-2 col-form-label">Jumlah kamar</label>
        <div class="col-sm-10">
        <input type="number" name="jml_kamar" value="{{ old('jml_kamar', $kamar->jml_kamar) }}" class="form-control @error('jml_kamar') is-invalid @enderror" id="Jumlah_kamar">
        @error('jml_kamar')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Jumlah_kamar" class="col-sm-2 col-form-label">Fasilitas kamar</label>
        <div class="col-sm-10">
            @foreach ($fasilitas_kamar as $fk)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="fasilitas_id[]" value="{{ $fk->id }}" id="{{ $fk->id }}">
                <label class="form-check-label d-block" for="{{ $fk->id }}">
                {{ $fk->nama_fasilitas }}
                </label>
            </div>
            @endforeach
            @error('fasilitas_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-warning mb-5">Edit</button>
        </div>
    </div>
    </form>
@endsection