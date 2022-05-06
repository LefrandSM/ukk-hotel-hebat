@extends('template/layouts')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <h1 class="display-6">Kamar</h1>
        </div>
        <div class="col-xl-10">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
    <a href="/admin/kamar/tambah" class="btn btn-primary my-2 px-3">Tambah</a>
    <table class="table table-bordered table-responsive">
        <thead class="bg-dark text-light">
            <tr>
                <th>No</th>
                <th>Tipe Kamar</th>
                <th>Jumlah Kamar</th>
                <th>Fasilitas Kamar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($kamar)
                <?php $angka = 1; ?>
                @foreach ($kamar as $k)
                <tr>
                    <td>{{ $angka++ }}</td>
                    <td>{{ $k->tipe_kamar }}</td>
                    <td>{{ $k->jml_kamar }}</td>
                    <td>
                        <ul>
                        @foreach ($k->fasilitas as $fasilitas)
                                <li>{{ $fasilitas->nama_fasilitas }}</li>
                        @endforeach
                        </ul>
                    </td>
                    <td class="d-flex">
                        <a class="btn btn-warning text-light" href="/admin/kamar/edit/{{ $k->id }}">Edit</a>
                        <form method="post" action="/admin/kamar/destroy">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="id" value="{{ $k->id }}">
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