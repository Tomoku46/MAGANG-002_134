<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\PbpdController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PbpdTersurveiController;
use App\Http\Controllers\PbpdTerkirimController;


Route :: resource('/permohonanpbpd', PbpdController::class);
Route :: resource('/pbpdtersurvei', PbpdTersurveiController::class);
Route :: resource('/pbpdterkirim', PbpdTerkirimController::class);
Route :: resource('/', DashboardController::class);

Route::get('/masterdata/export', [MasterDataController::class, 'export'])->name('masterdata.export');
Route::get('/masterdata/{id}/pdf', [MasterDataController::class, 'cetakPdf'])->name('masterdata.cetakpdf');
Route :: resource('/masterdata', MasterDataController::class);


Route::get('/login', function () {
    return view('login.index');
});

Route::post('/login', [PenggunaController::class, 'login'])->name('pengguna.post');

Route::get('/riwayathapus', function () {
    return view('dashboard.riwayathapus');
});

