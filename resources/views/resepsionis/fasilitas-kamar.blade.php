@extends('template/layouts')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <h1 class="display-6">Fasilitas Kamar</h1>
        </div>
    </div>
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