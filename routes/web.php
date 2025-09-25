<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PbpdController;
use App\Http\Controllers\PenggunaController;

Route :: resource('/coba', MahasiswaController::class);
Route :: resource('/permohonanpbpd', PbpdController::class);

Route::get('/', function () {
    return view('dashboard.index');
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

Route::get('/pbpdtersurvei', function () {
    return view('dashboard.pbpdtersurvei');
});

Route::get('/riwayathapus', function () {
    return view('dashboard.riwayathapus');
});

