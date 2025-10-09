<?php
namespace App\Http\Controllers;

use App\Models\PbpdTerkirim;
use App\Models\PermohonanPbpd;
use App\Models\PbpdTersurvei;
use Illuminate\Http\Request;

class PbpdTerkirimController extends Controller
{
    public function index()
    {
        $data = PbpdTerkirim::with(['permohonanPbpd', 'pbpdTersurvei'])->get();
        return view('pbpdterkirim.index', compact('data'));
    }

    public function create(Request $request)
    {
        $idTersurvei = $request->get('IdTersurvei');
        $tersurvei = null;
        $permohonan = null;

        if ($idTersurvei) {
            $tersurvei = \App\Models\PbpdTersurvei::find($idTersurvei);
            if ($tersurvei && $tersurvei->IdPermohonan) {
                $permohonan = \App\Models\PermohonanPbpd::find($tersurvei->IdPermohonan);
            }
        }

        return view('pbpdterkirim.create', compact('tersurvei', 'permohonan'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'IdPermohonan' => 'required|exists:permohonan_pbpd,id',
            'IdTersurvei' => 'required|exists:pbpd_tersurvei,id',
            'deleted_at' => 'nullable',
        ]);

        PbpdTerkirim::create([
            'IdPermohonan' => $request->IdPermohonan,
            'IdTersurvei' => $request->IdTersurvei,
            'TanggalNota' => $request->TanggalNota,
            'Nodin' => $request->Nodin,
            
        ]);

        PermohonanPbpd::where('id', $request->IdPermohonan)
        ->update(['Status' => 'Terkirim']);

    return redirect()->route('pbpdterkirim.index')->with('success', 'Data berhasil disimpan!');
    }

    public function show($id)
    {
        $detail = PbpdTerkirim::with(['permohonanPbpd', 'pbpdTersurvei'])->findOrFail($id);
        return view('pbpdterkirim.detail', compact('detail'));
    }

    public function edit($id)
    {
        $edit = PbpdTerkirim::findOrFail($id);
        $permohonan = PermohonanPbpd::find($edit->IdPermohonan);
        $tersurvei = PbpdTersurvei::find($edit->IdTersurvei);
        return view('pbpdterkirim.edit', compact('edit', 'permohonan', 'tersurvei'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'TanggalNota' => 'required|date',
            'Nodin' => 'required|string|max:255',
        ]);

        $pbpdTerkirim = \App\Models\PbpdTerkirim::findOrFail($id);
        $pbpdTerkirim->TanggalNota = $request->TanggalNota;
        $pbpdTerkirim->Nodin = $request->Nodin;
        $pbpdTerkirim->save();

    return redirect()->route('pbpdterkirim.index')->with('success', 'Data berhasil diedit!');
    }

    public function destroy($id)
    {
        $delete = PbpdTerkirim::findOrFail($id);
        $delete->delete();

    return redirect()->route('pbpdterkirim.index')->with('success', 'Data berhasil dihapus!');
    }


    
    public function restore($id)
    {
        $permohonan = \App\Models\PermohonanPbpd::withTrashed()->findOrFail($id);
        $permohonan->restore();

        // Restore data tersurvei yang terkait
        $tersurvei = \App\Models\PbpdTersurvei::withTrashed()->where('IdPermohonan', $id)->first();
        if ($tersurvei) {
            $tersurvei->restore();
        }

        // Restore data terkirim yang terkait
        $terkirim = \App\Models\PbpdTerkirim::withTrashed()->where('IdPermohonan', $id)->first();
        if ($terkirim) {
            $terkirim->restore();
        }

        return redirect()->route('riwayathapus.index')->with('success', 'Data berhasil dipulihkan!');
    }

    public function restoreAll()
    {
        \App\Models\PermohonanPbpd::onlyTrashed()->restore();
        return redirect()->route('riwayathapus.index')->with('success', 'Semua data berhasil dipulihkan!');
    }

}