@extends('template/layouts')

@section('content')
            <h1 class="mb-3 display-6 bg-primary text-light p-3 shadow">Fasilitas Hotel</h1>
            
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
    <table class="table table-bordered table-responsive">
        <thead class="bg-dark text-light">
            <tr>
                <th>No</th>
                <th>Fasilitas</th>
                <th>Detail</th>
                <th>Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($fasilitas)
                <?php $angka = 1; ?>
                @foreach ($fasilitas as $f)
                <tr>
                    <td>{{ $angka++ }}</td>
                    <td>{{ $f->nama }}</td>
                    <td>{{ $f->detail }}</td>
                    <td>
                        @if ($f->image)
                            <img src="{{ asset('storage/' . $f->image) }}" class="img-thumbnail" style="width: 300px">
                        @else
                            <p>Tidak ada gambar</p>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-warning text-light d-inline" href="/admin/fasilitas-hotel/edit/{{ $f->id }}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form class="d-inline" method="post" action="/admin/fasilitas-hotel/destroy">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="id" value="{{ $f->id }}">
                            <button class="btn btn-danger text-light d-inline" onclick="confirm('Anda yakin menghapus data ?')" type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <p>tidak ada data</p>
            @endif
            
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <a href="/admin/fasilitas-hotel/tambah" class="btn btn-primary my-2 px-3"><i class="fa-solid fa-plus"></i></a>
    </div>
@endsection