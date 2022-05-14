@extends('template/layouts')

@section('content')
<h1 class="display-1">Reservasi {{ $reservasi->tamu->nama_pemesan }}</h1>
<p>Tanggal: {{ $reservasi->created_at }}</p>
<table cellpadding="5px" cellspacing="0">
        <tr>
            <td>Nama Pemesan</td>
            <td> : </td>
            <td>{{ $reservasi->tamu->nama_pemesan }}</td>
        </tr>
        <tr>
            <td>Nama Tamu</td>
            <td> : </td>
            <td>{{ $reservasi->tamu->nama_tamu }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : </td>
            <td>{{ $reservasi->tamu->email }}</td>
        </tr>
        <tr>
            <td>No Handphone</td>
            <td> : </td>
            <td>{{ $reservasi->tamu->no_hp }}</td>
        </tr>
        <tr>
            <td>Tipe Kamar</td>
            <td> : </td>
            <td>{{ $reservasi->kamar->tipe_kamar }}</td>
        </tr>
        <tr>
            <td>Jumlah Kamar</td>
            <td> : </td>
            <td>{{ $reservasi->jml_kamar }}</td>
        </tr>
        <tr>
            <td>Tanggal Check In</td>
            <td> : </td>
            <td>{{ $reservasi->check_in }}</td>
        </tr>
        <tr>
            <td>Tanggal Check Out</td>
            <td> : </td>
            <td>{{ $reservasi->check_out }}</td>
        </tr>
</table>
    <p>Terimakasih sudah memesan, <b>Konfirmasi</b> lebih lanjut di kirim ke <b>E-mail</b> anda :)</p>
@endsection