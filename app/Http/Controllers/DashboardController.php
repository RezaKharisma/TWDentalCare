<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Perawat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $dokterCount = 0;
    public $perawatCount = 0;
    public $pasienCount = 0;
    public $antrianBaru = 0;

    public function __construct()
    {
        $this->dokterCount = Dokter::count();
        $this->perawatCount = Perawat::count();
        $this->pasienCount = Pasien::count();
    }

    public function index()
    {
        $dokter = $this->dokterCount;
        $perawat = $this->perawatCount;
        $pasien = $this->pasienCount;

        return view('dashboard.index', compact('dokter', 'perawat', 'pasien'));
    }
}
