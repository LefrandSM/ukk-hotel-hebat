@extends('template/layouts')

@section('content')
<h1 class="display-6 my-3">{{ $reservasi->tamu->nama_pemesan }} detail reservasi</h1>
    <div class="card mb-3">
        <div class="card-header">
        Tamu: {{ $reservasi->tamu->nama_tamu }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Detail tamu</h5>
            <p class="card-text">email: {{ $reservasi->tamu->email }}</p>
            <p class="card-text">no handphone: {{ $reservasi->tamu->no_hp }}</p>
            <h5 class="card-title">Detail reservasi</h5>
            <p class="card-text">tipe kamar: {{ $reservasi->kamar->tipe_kamar }}</p>
            <p class="card-text">jumlah kamar pesanan: {{ $reservasi->kamar->jml_kamar }}</p>
        </div>
        <div class="card-footer text-muted">
            <p class="card-text">check in: {{ $reservasi->check_in }}</p>
            <p class="card-text">check out: {{ $reservasi->check_out }}</p>
        </div>
    </div>
    <div class="mb-5">
        <a href="/tamu/report/{{ $reservasi->id }}" class="btn btn-success">Print <i class="fa-solid fa-print"></i></a>
        <a href="/resepsionis/reservasi/edit/{{ $reservasi->id }}" class="btn btn-warning">Edit <i class="fa-solid fa-pen-to-square"></i></a>
    </div>
@endsection 