<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        return view('dashboard.pengaturan.index');
    }

    public function indexProfil()
    {
        return view('dashboard.pengaturan.profil');
    }

    public function indexPassword()
    {
        return view('dashboard.pengaturan.password');
    }
}
