<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index()
    {
        return view('guest.index');
    }

    public function list()
    {
        return view('guest.tabel');
    }
}
