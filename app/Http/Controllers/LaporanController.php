<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporanKeuanganIndex()
    {
        return view('dashboard.laporan.laporan_keuangan');
    }
}
