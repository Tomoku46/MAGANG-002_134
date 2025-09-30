<?php

namespace App\Http\Controllers;

use App\Models\PbpdTersurvei;
use App\Models\PermohonanPbpd;
use Illuminate\Http\Request;

class PbpdTersurveiController extends Controller
{
    public function index()
    {
        $data = PbpdTersurvei::with('permohonanPbpd')->get();
        return view('pbpdtersurvei.index', compact('data'));
    }

    public function create(Request $request)
    {
        $idPermohonan = $request->get('IdPermohonan');
        $permohonan = null;
        if ($idPermohonan) {
            $permohonan = \App\Models\PermohonanPbpd::find($idPermohonan);
        }
        return view('pbpdtersurvei.create', compact('permohonan', 'idPermohonan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'IdPermohonan' => 'required|exists:permohonan_pbpd,id',
        ]);

        PbpdTersurvei::create([
            'IdPermohonan' => $request->IdPermohonan,
            'BP' => $request->BP,
            'NilaiRabOpsi1' => $request->NilaiRabOpsi1,
            'NilaiRabOpsi2' => $request->NilaiRabOpsi2,
            'KebutuhanApp' => $request->KebutuhanApp,
            'KKF' => $request->KKF,
            'Penyulang' => $request->Penyulang,
            'BebanPenyulang' => $request->BebanPenyulang,
            'Beban' => $request->Beban,
            'GarduInduk' => $request->GarduInduk,
            'TrafoGI' => $request->TrafoGI,
            'KapasitasTrafo' => $request->KapasitasTrafo,
            'BebanTrafoGI' => $request->BebanTrafoGI,
            'BebanTrafoGIMW' => $request->BebanTrafoGIMW,
            'BebanTrafoGISetelah' => $request->BebanTrafoGISetelah,
            'StatusBeban' => $request->StatusBeban,
            'TaggingLokasi' => $request->TaggingLokasi,
            'Keterangan' => $request->Keterangan,
            
            
        ]);

        PermohonanPbpd::where('id', $request->IdPermohonan)
        ->update(['Status' => 'Tersurvei']);

        return redirect()->route('pbpdtersurvei.index');
    }

    public function show($id)
    {
        $detailtersurvei = PbpdTersurvei::with('permohonanPbpd')->find($id);
        return view('pbpdtersurvei.detail', compact('detailtersurvei'));
    }

    public function edit($id)
    {
        $edittersurvei = PbpdTersurvei::find($id);
        // Ambil satu data permohonan, bukan collection
        $permohonan = PermohonanPbpd::find($edittersurvei->IdPermohonan);
        return view('pbpdtersurvei.edit', compact('edittersurvei', 'permohonan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'IdPermohonan' => 'required|exists:permohonan_pbpd,id',
        ]);

        $edittersurvei = PbpdTersurvei::find($id);
        $edittersurvei->update([
            'IdPermohonan' => $request->IdPermohonan,
            'BP' => $request->BP,
            'NilaiRabOpsi1' => $request->NilaiRabOpsi1,
            'NilaiRabOpsi2' => $request->NilaiRabOpsi2,
            'KebutuhanApp' => $request->KebutuhanApp,
            'KKF' => $request->KKF,
            'Penyulang' => $request->Penyulang,
            'BebanPenyulang' => $request->BebanPenyulang,
            'Beban' => $request->Beban,
            'GarduInduk' => $request->GarduInduk,
            'TrafoGI' => $request->TrafoGI,
            'KapasitasTrafo' => $request->KapasitasTrafo,
            'BebanTrafoGI' => $request->BebanTrafoGI,
            'BebanTrafoGIMW' => $request->BebanTrafoGIMW,
            'BebanTrafoGISetelah' => $request->BebanTrafoGISetelah,
            'StatusBeban' => $request->StatusBeban,
            'TaggingLokasi' => $request->TaggingLokasi,
            'Keterangan' => $request->Keterangan,
        ]);

        return redirect()->route('pbpdtersurvei.index');
    }

    public function destroy($id)
    {
        $delete = PbpdTersurvei::find($id);
         if ($delete && $delete->IdPermohonan) {
        PermohonanPbpd::where('id', $delete->IdPermohonan)->delete();
    }
        $delete->delete();

        return redirect()->route('pbpdtersurvei.index');
    }
}