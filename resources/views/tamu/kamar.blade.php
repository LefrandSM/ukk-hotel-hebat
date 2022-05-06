@extends('template/layouts')

@section('content')
    @foreach($kamar as $k)
    <div class="row mb-4">
        <h1>Tipe {{ $k->tipe_kamar }}</h1>
        <p>Fasilitas:</p>
        <ul>
            @foreach ($k->fasilitas as $fasilitas)
                <li>{{ $fasilitas->nama_fasilitas }}</li>
            @endforeach
        </ul>
    </div>
    @endforeach
@endsection