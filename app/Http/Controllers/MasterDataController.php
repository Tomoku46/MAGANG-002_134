<?php
namespace App\Http\Controllers;

use App\Models\PbpdTerkirim;
use App\Models\PermohonanPbpd;
use App\Models\PbpdTersurvei;
use App\Models\MasterData;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MasterDataExport;

use Barryvdh\DomPDF\Facade\Pdf;

class MasterDataController extends Controller
{
    public function cetakPdf($id)
    {
        $detailmaster = PermohonanPbpd::with(['pbpdTerkirim', 'pbpdTersurvei'])->findOrFail($id);
        $pdf = Pdf::loadView('masterdata.pdf', compact('detailmaster'));
        return $pdf->download('detail_data_'.$detailmaster->IdPel.'.pdf');
    }
public function index()
{
// Ambil semua IdPermohonan yang sudah pernah diinput ke PbpdTersurvei, termasuk yang sudah dihapus
$sudahTersurvei = \App\Models\PbpdTersurvei::withTrashed()->pluck('IdPermohonan')->toArray();

// Ambil permohonan yang belum pernah diinput ke PbpdTersurvei
$activePermohonan = \App\Models\PermohonanPbpd::whereNull('deleted_at')
    ->whereNotIn('id', $sudahTersurvei)
    ->get()
    ->map(function ($item) {
        $item->asal = 'permohonan';
        return $item;
    });



$activeTersurvei = \App\Models\PbpdTersurvei::with(['permohonanPbpd.pbpdTerkirim'])->whereNull('deleted_at')->get()->map(function ($item) {
    $item->asal = 'tersurvei';
    return $item;
});

$activeTerkirim = \App\Models\PbpdTerkirim::with(['permohonanPbpd'])->whereNull('deleted_at')->get()->map(function ($item) {
    $item->asal = 'terkirim';
    return $item;
});

$allActive = $activePermohonan->merge($activeTersurvei)->merge($activeTerkirim);

return view('masterdata.index', compact('allActive'));
}

public function show($id)
    {
        $detailmaster = PermohonanPbpd::with(['pbpdTerkirim', 'pbpdTersurvei'])->findOrFail($id);
return view('masterdata.detail', compact('detailmaster'));
    }

    public function export(Request $request)
    {
        $data = PermohonanPbpd::with(['pbpdTersurvei', 'pbpdTerkirim'])
            ->whereIn('Status', ['Permohonan', 'Tersurvei', 'Terkirim'])
            ->get();
        return Excel::download(new MasterDataExport($data), 'daftardata.xlsx');
    }
}