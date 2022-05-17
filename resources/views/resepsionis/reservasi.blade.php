@extends('template/layouts')

@section('content')
    <h1 class=" shadow display-6 bg-secondary pb-2 px-3 text-light mb-3">Reservasi <i class="fa-solid fa-receipt"></i></h1>
    <div class="row mb-3">
        <div class="col-xl-3 mb-3">
            <form action="/resepsionis/reservasi" class="d-flex">
                <input type="date" class="form-control" name="check_in">
                <button class="btn btn-primary" type="submit" id="search"><i class="fa-regular fa-calendar"></i></button>
            </form>
        </div>
        <div class="col-xl-6"></div>
        <div class="col-xl-3">
            <form action="/resepsionis/reservasi" class="d-flex">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Nama tamu.." aria-label="Nama tamu.." aria-describedby="button-addon2" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    <table class="table table-bordered table-responsive">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Tamu</th>
                <th>Tanggal Check In</th>
                <th>Tanggal Check Out</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $angka = 1; ?>
            @foreach ($reservasi as $r)
            <tr>
                <td>{{ $angka++ }}</td>
                <td>{{ $r->tamu->nama_tamu }}</td>
                <td>{{ $r->check_in }}</td>
                <td>{{ $r->check_out }}</td>
                <td>
                    <a href="/resepsionis/reservasi/{{ $r->id }}" class="btn btn-success d-inline">Check in <i class="fa-regular fa-calendar-check"></i></a>
                    <form method="post" action="/reservasi/destroy" class="d-inline">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="id" value="{{ $r->id }}">
                        <button type="submit" class="btn btn-danger" onclick="confirm('anda yakin ?')">Delete <i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection