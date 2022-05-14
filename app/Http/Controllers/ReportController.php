<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use PDF; //library pdf

class ReportController extends Controller
{
    public function tamu_pdf(Reservasi $reservasi)
    {
        $data = [
            'title' => 'Report Tamu',
            'reservasi' => $reservasi,
            'status' => 'report'
        ];
        $pdf = PDF::loadview('/tamu/report', $data);
        return $pdf->download("reservasi " . $reservasi->tamu->nama_pemesan . ".pdf");
    }
}
