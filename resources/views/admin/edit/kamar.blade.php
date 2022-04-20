@extends('template/layouts')

@section('content')
    <h1 class="display-6 mb-5">Kamar</h1>
    <form method="post" action="/admin/kamar/store">
        @csrf
        <div class="mb-3 row">
          <label for="tipe_kamar" class="col-sm-2 col-form-label">Tipe kamar</label>
          <div class="col-sm-10">
          <input type="text" autocomplete="off" name="tipe_kamar" value="{{ $kamar->tipe_kamar }}" class="form-control @error('tipe_kamar') is-invalid @enderror" id="tipe_kamar">
          @error('tipe_kamar')
              <p class="text-danger">{{ $message }}</p>
          @enderror
          </div>
      </div>
    <div class="mb-3 row">
        <label for="Jumlah_kamar" class="col-sm-2 col-form-label">Jumlah kamar</label>
        <div class="col-sm-10">
        <input type="number" name="jml_kamar" value="{{ $kamar->jml_kamar }}" class="form-control @error('jml_kamar') is-invalid @enderror" id="Jumlah_kamar">
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
              <input class="form-check-input" type="radio" name="fasilitas_id" id="{{ $fk->id }}" value="{{ $fk->id }}">
              <label class="form-check-label" for="{{ $fk->id }}">
                {!! $fk->nama_fasilitas !!}
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
            <button type="submit" class="btn btn-primary mb-5">Tambah</button>
        </div>
    </div>
    </form>
@endsection