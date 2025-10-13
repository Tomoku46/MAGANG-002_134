<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\PbpdController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PbpdTersurveiController;
use App\Http\Controllers\PbpdTerkirimController;
use App\Http\Controllers\RiwayatHapusController;

Route :: resource('/permohonanpbpd', PbpdController::class);
Route :: resource('/pbpdtersurvei', PbpdTersurveiController::class);
Route :: resource('/pbpdterkirim', PbpdTerkirimController::class);
Route :: resource('/dashboard', DashboardController::class);
Route::get('/riwayathapus/restoreAll', [RiwayatHapusController::class, 'restoreAll'])->name('riwayathapus.restoreAll');
Route :: resource('/riwayathapus', RiwayatHapusController::class);
Route::get('/riwayathapus/{id}/restore', [\App\Http\Controllers\RiwayatHapusController::class, 'restore'])->name('riwayathapus.restore');
Route::get('/riwayathapus/{id}/force-delete', [RiwayatHapusController::class, 'forceDelete'])->name('riwayathapus.forceDelete');
Route::post('/riwayathapus/force-delete-selected', [RiwayatHapusController::class, 'forceDeleteSelected'])->name('riwayathapus.forceDeleteSelected');
Route::get('/masterdata/export', [MasterDataController::class, 'export'])->name('masterdata.export');
Route::get('/masterdata/{id}/pdf', [MasterDataController::class, 'cetakPdf'])->name('masterdata.cetakpdf');
Route :: resource('/masterdata', MasterDataController::class);


Route::get('/', function () {
    return view('login.index');
});

Route::post('/login', [PenggunaController::class, 'login'])->name('pengguna.post');


