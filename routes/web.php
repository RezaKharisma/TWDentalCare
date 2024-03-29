<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\RekamMedisController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('home');
});

Route::get('/daftar-antrian', [AntrianController::class, 'index'])->name('antrian');
Route::get('/list-antrian', [AntrianController::class, 'list'])->name('antrian');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan');
Route::get('/dashboard/pengaturan/profil', [PengaturanController::class, 'indexProfil'])->name('pengaturan-profil');
Route::get('/dashboard/pengaturan/password', [PengaturanController::class, 'indexPassword'])->name('pengaturan-password');

Route::resource('/dashboard/dokter', DokterController::class);

Route::resource('/dashboard/perawat', PerawatController::class);

Route::resource('/dashboard/pasien', PasienController::class);

Route::resource('/dashboard/rekam_medis', RekamMedisController::class);

Route::get('/dashboard/laporan_keuangan', [LaporanController::class, 'laporanKeuanganIndex'])->name('laporanKeuangan');
