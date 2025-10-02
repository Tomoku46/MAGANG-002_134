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
        return $pdf->download('masterdata_'.$detailmaster->IdPel.'.pdf');
    }
public function index()
{
        $data = PermohonanPbpd::with(['pbpdTersurvei', 'pbpdTerkirim'])
        ->whereIn('Status', ['Permohonan', 'Tersurvei', 'Terkirim'])
        ->get();

    return view('masterdata.index', compact('data'));
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
        return Excel::download(new MasterDataExport($data), 'masterdata.xlsx');
    }
}