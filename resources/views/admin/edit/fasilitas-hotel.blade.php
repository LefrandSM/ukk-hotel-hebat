@extends('template/layouts')

@section('content')
    <h1 class="display-6 mb-5">Fasilitas Hotel</h1>
    <form method="post" action="/admin/fasilitas-hotel/update/{{ $fasilitas->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" autocomplete="off" name="nama" value="{{ old('nama', $fasilitas->nama) }}" class="form-control @error('nama') is-invalid @enderror" id="nama">
          @error('nama')
              <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="detail" class="col-sm-2 col-form-label">Detail</label>
        <div class="col-sm-10">
            <textarea class="form-control @error('detail') is-invalid @enderror" id="detail" name="detail" rows="3">{{ old('detail', $fasilitas->detail) }}</textarea>
            @error('detail')
                  <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="image" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image">
            @error('image')
                  <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary mb-5">Edit</button>
        </div>
    </div>
    </form>
@endsection