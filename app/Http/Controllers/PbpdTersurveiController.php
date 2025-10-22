<?php

namespace App\Http\Controllers;

use App\Models\PbpdTersurvei;
use App\Models\PermohonanPbpd;
use Illuminate\Http\Request;

class PbpdTersurveiController extends Controller
{
    public function index()
    {
        // Ambil data tersurvei yang relasi permohonannya berstatus "Tersurvei"
        $data = PbpdTersurvei::with('permohonanPbpd')
            ->whereHas('permohonanPbpd', function($q) {
                $q->where('Status', 'Tersurvei');
            })
            ->get();

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
            'Ampere' => $request->Ampere,
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

        return redirect()->route('pbpdtersurvei.index')->with('success', 'Data berhasil disimpan!');
    }

    public function show($id)
    {
        $detailtersurvei = PbpdTersurvei::with('permohonanPbpd')->find($id);
        return view('pbpdtersurvei.detail', compact('detailtersurvei'));
    }

    public function edit($id)
    {
        $edittersurvei = PbpdTersurvei::find($id);
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
            'Ampere' => $request->Ampere,
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

        return redirect()->route('pbpdtersurvei.index')->with('success', 'Data berhasil diedit!');
    }

    public function destroy($id)
    {
        $item = PbpdTersurvei::findOrFail($id);
        $item->delete(); // Soft delete saja, status tetap
        return redirect()->route('pbpdtersurvei.index')->with('success', 'Data berhasil dihapus!');
    }

    public function updateStatus(Request $request, $id)
    {
        PermohonanPbpd::where('id', $request->IdPermohonan)
            ->update(['Status' => 'terkirim']);

        return redirect()->route('pbpdtersurvei.index')->with('success', 'Data berhasil dihapus!');
    }

  

    public function restoreAll()
    {
        \App\Models\PermohonanPbpd::onlyTrashed()->restore();
        return redirect()->route('riwayathapus.index')->with('success', 'Semua data berhasil dipulihkan!');
    }
}