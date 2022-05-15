@extends('template/layouts')

@section('content')
<h1 class=" shadow display-6 bg-secondary pb-2 px-3 text-light mb-3">Dashboard <i class="fa-solid fa-gauge-high"></i></h1>
<div class="row">
    <div class="col-xl-6">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <i class="fa-solid fa-receipt img-fluid rounded-start p-4 bg-success text-light"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Reservasi</h5>
                  <p class="card-text">Jumlah pemesanan {{ $reservasi->count() }}</p>
                  <p class="card-text"><small class="text-muted">Pemesanan terakhir {{ $terbaru->created_at }}</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection