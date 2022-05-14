@extends('template/layouts')

@section('content')
    <div class="row mb-3">
        <div class="col-xl-3">
            <form action="/resepsionis/reservasi" class="d-flex">
                <input type="date" class="form-control" name="check_in">
                <button class="btn btn-primary" type="submit" id="search"><i class="fa-regular fa-calendar"></i></button>
            </form>
        </div>
        <div class="col-xl-9">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
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
                    <a href="/resepsionis/reservasi/{{ $r->id }}" class="btn btn-primary d-inline">Check in <i class="fa-regular fa-calendar-check"></i></a>
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