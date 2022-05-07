@extends('template/layouts')

@section('content')
    <div class="row">
        <div class="col-xl-3 mb-3">
            <form action="/resepsionis/reservasi" class="d-flex">
                <input type="date" class="form-control" name="check_in">
                <button class="btn btn-primary" type="submit" id="search"><i class="fa-regular fa-calendar"></i></button>
            </form>
        </div>
    </div>
    <table class="table table-bordered table-responsive">
        <thead class="table-dark">
            <tr>
                <th>Nama Tamu</th>
                <th>Tanggal Check In</th>
                <th>Tanggal Check Out</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservasi as $r)
            <tr>
                <td>{{ $r->tamu->nama_tamu }}</td>
                <td>{{ $r->check_in }}</td>
                <td>{{ $r->check_out }}</td>
                <td>Cek In</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection