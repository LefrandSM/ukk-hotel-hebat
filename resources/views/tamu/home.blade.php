@extends('/template/layouts')

@section('content')
    <div class="jumbotron rounded mb-4">
        <img src="{{ asset('storage/jumbotron.jpg') }}" alt="">
    </div>
    <div class="row mb-3">
        <h1>Form Pemesanan</h1>
    </div>
    <div class="row pemesanan">
        <div class="col-xl-8">
            <form action="">
                <div class="mb-3 mt-3 row">
                    <label for="nama_pemesan" class="col-sm-4 col-form-label">Nama pemesan</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-4 col-form-label">email</label>
                    <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="no_hp" class="col-sm-4 col-form-label">no handphone</label>
                    <div class="col-sm-8">
                    <input type="number" class="form-control" id="no_hp" name="no_hp" autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama_tamu" class="col-sm-4 col-form-label">Nama tamu</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama_tamu" class="col-sm-4 col-form-label">Tipe kamar</label>
                    <div class="col-sm-8">
                        <select class="form-select" name="id_kamar" aria-label="Default select example">
                            @foreach ($tipe as $t)
                                <option value="{{ $t->id }}">{{ $t->tipe_kamar }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-xl-5">
                        <p>Tanggal Cek In</p>
                        <input type="date" name="check_in" class="form-control">
                    </div>
                    <div class="col-xl-5">
                        <p>Tanggal Cek Out</p>
                        <input type="date" name="check_out" class="form-control">
                    </div>
                    <div class="col-xl-2">
                        <p>Jumlah Kamar</p>
                        <input type="number" name="jml_kamar" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="mb-5 row">
                    <div class="col-xl-4">
                        <button class="btn btn-primary" type="submit">Konfirmasi Pemesanan</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-4 d-flex justify-content-center align-items-center">
            <h1 class="logo-pemesanan"><i class="fa-solid fa-check-to-slot"></i></h1>
        </div>
    </div>
    <div class="row tentang">
        <h1 class="text-center mt-3 mb-3">Tentang Kami</h1>
        <p class="px-4">Lepaskan diri Anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau, Kid's Club yang luas - enawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyaman keluarga. Convention Center kami, dilengkapi pelayanan lengkap dengan ruang konversi terbesar di Bandung, mampu mengokomodasi hingga 3.000 delegasi. Manfaatkan ruang penyelenggaraan konvensi  M.I.C.E ataupun mewujudkan acara pernikahan adat yang mewah.</p>
    </div>
@endsection