@extends('template/layouts')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <h1 class="display-6">Fasilitas Kamar</h1>
        </div>
        <div class="col-lg-9">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
    <a href="/admin/fasilitas-kamar/tambah" class="btn btn-primary my-2 px-3">Tambah</a>
    <table class="table table-bordered table-responsive">
        <thead class="bg-dark text-light">
            <tr>
                <th>No</th>
                <th>Tipe Kamar</th>
                <th>Fasilitas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($fasilitas)
                <?php $angka = 1; ?>
                @foreach ($fasilitas as $f)
                <tr>
                    <td>{{ $angka++ }}</td>
                    <td>
                        @foreach ($f->kamar as $kamar)
                        <ul>
                            <li>{{ $kamar->tipe_kamar }}</li>
                        </ul>
                        @endforeach
                    </td>
                    <td>{{ $f->nama_fasilitas }}</td>
                    <td class="d-flex">
                        <a class="btn btn-warning text-light" href="/admin/fasilitas-kamar/edit/{{ $f->id }}">Edit</a>
                        <form method="post" action="/admin/fasilitas-kamar/destroy">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="id" value="{{ $f->id }}">
                            <button class="btn btn-danger text-light" onclick="confirm('Anda yakin menghapus data ?')" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <p>tidak ada data</p>
            @endif
            
        </tbody>
    </table>
@endsection