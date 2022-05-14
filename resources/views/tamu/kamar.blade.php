@extends('template/layouts')

@section('content')
<div class="row mb-4">
    @foreach($kamar as $k)
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tipe {{ $k->tipe_kamar }}</h5>
              <p class="card-text">Fasilitas:</p>
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($k->fasilitas as $fasilitas)
                    <li class="list-group-item">{{ $fasilitas->nama_fasilitas }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach
</div>
@endsection