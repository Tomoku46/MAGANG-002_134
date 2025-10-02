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
        ]);

        PbpdTerkirim::create([
            'IdPermohonan' => $request->IdPermohonan,
            'IdTersurvei' => $request->IdTersurvei,
            'TanggalNota' => $request->TglNotaDinas,
            'Nodin' => $request->Nodin,
            
        ]);

        PermohonanPbpd::where('id', $request->IdPermohonan)
        ->update(['Status' => 'Terkirim']);

        return redirect()->route('pbpdterkirim.index');
    }

    public function show($id)
    {
        $detail = PbpdTerkirim::with(['permohonanPbpd', 'pbpdTersurvei'])->findOrFail($id);
        return view('pbpdterkirim.detail', compact('detail'));
    }

    public function edit($id)
    {
        $edit = PbpdTerkirim::findOrFail($id);
        $permohonan = PermohonanPbpd::all();
        $tersurvei = PbpdTersurvei::all();
        return view('pbpdterkirim.edit', compact('edit', 'permohonan', 'tersurvei'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'permohonan_pbpd_id' => 'required|exists:permohonan_pbpd,id',
            'pbpd_tersurvei_id' => 'required|exists:pbpd_tersurvei,id',
            'TanggalNota' => 'nullable|date',
            'Nodin' => 'nullable|string',
        ]);

        $edit = PbpdTerkirim::findOrFail($id);
        $edit->update($request->all());

        return redirect()->route('pbpdterkirim.index');
    }

    public function destroy($id)
    {
        $delete = PbpdTerkirim::findOrFail($id);
        $delete->delete();

        return redirect()->route('pbpdterkirim.index');
    }
}