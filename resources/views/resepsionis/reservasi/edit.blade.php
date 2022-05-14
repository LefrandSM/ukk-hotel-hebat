@extends('template/layouts')

@section('content')
<h1 class="display-6 mb-5">Kamar</h1>
<form method="post" action="/reservasi/update/{{ $reservasi->id }}">
    @method('put')
    @csrf
    <div class="mb-3 row">
        <label for="nama_pemesan" class="col-sm-2 col-form-label">Nama Pemesan</label>
        <div class="col-sm-10">
        <input type="text" autocomplete="off" name="nama_pemesan" value="{{ old('nama_pemesan', $reservasi->tamu->nama_pemesan) }}" class="form-control @error('nama_pemesan') is-invalid @enderror" id="nama_pemesan">
        @error('nama_pemesan')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
    </div>  
    <div class="mb-3 row">
        <label for="no_hp" class="col-sm-2 col-form-label">Nama Pemesan</label>
        <div class="col-sm-10">
        <input type="number" autocomplete="off" name="no_hp" value="{{ $reservasi->tamu->no_hp }}" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp">
        @error('no_hp')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
    </div>  
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" autocomplete="off" name="email" value="{{ old('email', $reservasi->tamu->email) }}" class="form-control @error('email') is-invalid @enderror" id="email">
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_tamu" class="col-sm-2 col-form-label">Nama Tamu</label>
        <div class="col-sm-10">
        <input type="nama_tamu" autocomplete="off" name="nama_tamu" value="{{ old('nama_tamu', $reservasi->tamu->nama_tamu) }}" class="form-control @error('nama_tamu') is-invalid @enderror" id="nama_tamu">
        @error('nama_tamu')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kamar_id" class="col-sm-2 col-form-label">Tipe kamar</label>
        <div class="col-sm-10">
            <select class="form-select" name="kamar_id" aria-label="kamar_id">
                @foreach ($tipe as $t)
                    @if ($t->id == $reservasi->kamar_id)    
                        <option value="{{ $t->id }}" selected>{{ $t->tipe_kamar }}</option>
                    @else
                        <option value="{{ $t->id }}">{{ $t->tipe_kamar }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-xl-5">
            <p>Tanggal Cek In</p>
            <input type="date" name="check_in" class="form-control @error('check_in') is-invalid @enderror" value="{{ old('check_in', $reservasi->check_in) }}">
            @error('check_in')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-xl-5">
            <p>Tanggal Cek Out</p>
            <input type="date" name="check_out" class="form-control @error('check_out') is-invalid @enderror" value="{{ old('check_in', $reservasi->check_out) }}">
            @error('check_out')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-xl-2">
            <p>Jumlah Kamar</p>
            <input type="number" name="jml_kamar" class="form-control @error('jml_kamar') is-invalid @enderror" value="{{ old('jml_kamar', $reservasi->jml_kamar) }}" autocomplete="off">
            @error('jml_kamar')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="row mt-3 mb-4">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary mb-5">Edit</button>
            </div>
        </div>
    </div>
</form>
@endsection