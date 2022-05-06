@extends('template/layouts')

@section('content')
    <h1 class="mb-5">Dashboard</h1>
    <div class="card mb-3">
        <h5 class="card-header">Kamar</h5>
        <div class="card-body">
          <p class="card-text">Jumlah tipe kamar saat ini {{ $kamar }}</p>
          <a href="/admin/kamar" class="btn btn-primary">Tabel kamar</a>
        </div>
    </div>
    <div class="card mb-5">
        <h5 class="card-header">Fasilitas Hotel</h5>
        <div class="card-body">
          <p class="card-text">Jumlah fasilitas hotel saat ini {{ $fasilitas_hotel }}</p>
          <a href="/admin/fasilitas-hotel" class="btn btn-primary">Tabel fasilitas hotel</a>
        </div>
    </div>
@endsection