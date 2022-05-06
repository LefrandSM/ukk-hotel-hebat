@extends('template/layouts')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <h1 class="display-6">Fasilitas Hotel</h1>
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
                    <td class="d-flex">
                        <a class="btn btn-warning text-light" href="/admin/fasilitas-hotel/edit/{{ $f->id }}">Edit</a>
                        <form method="post" action="/admin/fasilitas-hotel/destroy">
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
    <div class="d-flex justify-content-end">
        <a href="/admin/fasilitas-hotel/tambah" class="btn btn-primary my-2 px-3"><i class="fa-solid fa-plus"></i></a>
    </div>
@endsection