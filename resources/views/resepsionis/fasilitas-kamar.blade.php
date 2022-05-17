@extends('template/layouts')

@section('content')
<h1 class=" shadow display-6 bg-secondary pb-2 px-3 text-light mb-3">Fasilitas Kamar <i class="fa-solid fa-door-closed"></i></h1>
    <table class="table table-bordered table-responsive">
        <thead class="bg-dark text-light">
            <tr>
                <th>No</th>
                <th>Tipe Kamar</th>
                <th>Fasilitas</th>
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
                </tr>
                @endforeach
            @else
                <p>tidak ada data</p>
            @endif
            
        </tbody>
    </table>
@endsection