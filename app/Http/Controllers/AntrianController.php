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
        \Carbon\Carbon::setLocale('id');
        setlocale(LC_ALL, 'IND');
        $date = \Carbon\Carbon::now()->formatLocalized('%A, %d %B %Y');

        return view('guest.tabel', compact('date'));
    }
}
