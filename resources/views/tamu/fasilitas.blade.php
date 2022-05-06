@extends('template/layouts')

@section('content')
    <div class="jumbotron rounded mb-3">
        <img src="{{ asset('storage/jumbotron.jpg') }}" alt="">
    </div>
    <div class="row">
        <h1 class="mb-3">Fasilitas</h1>
    </div>
    <div class="row mb-5">
        @foreach ($fasilitas as $f)
        <div class="col-xl-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/'. $f->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $f->nama }}</h5>
                  <p class="card-text">{{ $f->detail }}</p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
@endsection