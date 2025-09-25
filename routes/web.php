<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PbpdController;

Route :: resource('/coba', MahasiswaController::class);
Route :: resource('/permohonanpbpd', PbpdController::class);

Route::get('/', function () {
    return view('dashboard.index');
});

// Route::get('/permohonanpbpd', function () {
//     return view('permohonanpbpd.index');
// });

// Route::get('/tambahpermohonanpbpd', function () {
//     return view('permohonanpbpd.create');
// });


Route::get('/login', function () {
    return view('login');
});

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

