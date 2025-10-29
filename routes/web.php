<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\PbpdController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PbpdTersurveiController;
use App\Http\Controllers\PbpdTerkirimController;
use App\Http\Controllers\RiwayatHapusController;


Route::get('/', function () {
    return view('login.index');
});

Route::post('/login', [PenggunaController::class, 'login'])->name('pengguna.post');
Route::post('/logout', [PenggunaController::class, 'logout'])->name('logout');


Route::middleware(['checkrole'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::get('/masterdata/export', [MasterDataController::class, 'export'])->name('masterdata.export');
    Route::get('/masterdata/{id}/pdf', [MasterDataController::class, 'cetakPdf'])->name('masterdata.cetakpdf');
    Route::resource('/masterdata', MasterDataController::class);
    Route::resource('/permohonanpbpd', PbpdController::class);
    Route::resource('/pbpdtersurvei', PbpdTersurveiController::class);
    Route::resource('/pbpdterkirim', PbpdTerkirimController::class);
    Route::resource('/riwayathapus', RiwayatHapusController::class)->except(['destroy']);
    Route::get('/riwayathapus/restore/{model}/{id}', [RiwayatHapusController::class, 'restore'])->name('riwayathapus.restore');
    Route::delete('/riwayathapus/delete/{model}/{id}', [RiwayatHapusController::class, 'destroy'])->name('riwayathapus.destroy');
    Route::get('/riwayathapus/restoreAll', [RiwayatHapusController::class, 'restoreAll'])->name('riwayathapus.restoreAll');
    Route::post('/riwayathapus/force-delete-selected', [RiwayatHapusController::class, 'forceDeleteSelected'])->name('riwayathapus.forceDeleteSelected');
    Route::get('/riwayathapus/{id}/force-delete', [RiwayatHapusController::class, 'forceDelete'])->name('riwayathapus.forceDelete');
    // dst...
});




