<?php
namespace App\Http\Controllers;

use App\Models\PbpdTerkirim;
use App\Models\PermohonanPbpd;
use App\Models\PbpdTersurvei;
use App\Models\MasterData;
use Illuminate\Http\Request;

class MasterDataController extends Controller
{
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
}