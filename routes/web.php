<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PbpdController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PbpdTersurveiController;
use App\Models\PermohonanPbpd;


Route :: resource('/permohonanpbpd', PbpdController::class);
Route :: resource('/pbpdtersurvei', PbpdTersurveiController::class);
Route :: resource('/', DashboardController::class);


Route::get('/detail', function () {
    return view('permohonanpbpd.detail');
});

Route::get('/login', function () {
    return view('login.index');
});

Route::post('/login', [PenggunaController::class, 'login'])->name('pengguna.post');

Route::get('/masterdata', function () {
    return view('dashboard.masterdata');
});

Route::get('/inputdatapbpd', function () {
    return view('inputdatapbpd');
});

Route::get('/tambahhasilsurvei', function () {
    return view('tambahhasilsurvei');
});

Route::get('/riwayathapus', function () {
    return view('dashboard.riwayathapus');
});

