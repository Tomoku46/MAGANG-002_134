<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/masterdata', function () {
    return view('dashboard.masterdata');
});

Route::get('/inputdatapbpd', function () {
    return view('inputdatapbpd');
});

Route::get('/permohonanpbpd', function () {
    return view('permohonanpbpd');
});

Route::get('/tambahpermohonanpbpd', function () {
    return view('tambahpermohonanpbpd');
});

Route::get('/tambahhasilsurvei', function () {
    return view('tambahhasilsurvei');
});

Route::get('/pbpdtersurvei', function () {
    return view('pbpdtersurvei');
});

Route::get('/riwayathapus', function () {
    return view('riwayathapus');
});

