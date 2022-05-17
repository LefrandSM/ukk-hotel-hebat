@extends('template/layouts')

@section('content')
    <div class="jumbotron rounded mb-3">
        <img src="{{ asset('storage/jumbotron.jpg') }}" alt="">
    </div>
    <div class=" mb-3 title-fasilitas">
            <h1 class="display-6">Fasilitas Hotel</h1>
            <section class="garis-bawah"></section>
    </div>
    <div class="row mb-5 fasilitas">
        @foreach ($fasilitas as $f)
        <div class="col-xl-4">
            <div class="row shadow g-0 bg-light position-relative">
                <div class="col-md-6 mb-md-0 p-md-4">
                  <img src="{{ asset('storage/'. $f->image) }}" class="w-100">
                </div>
                <div class="col-md-6 p-4 ps-md-0">
                  <h5 class="mt-0">{{ $f->nama }}</h5>
                  <p>{{ $f->detail }}</p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
@endsection