<?php

namespace App\Http\Controllers;

use App\Models\PermohonanPbpd;
use Illuminate\Http\Request;

class PbpdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PermohonanPbpd::all();
        return view('permohonanpbpd.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permohonanpbpd.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'IdPel' => 'required',
            'NamaPemohon' => 'required',
            'TglSuratDiterima' => 'required',
            'NoWhatsapp' => 'required',
            'AplManajemenSurat' => 'required',
            'PermoDayaLama' => 'required',
            'PermoDayaBaru' => 'required',
            'SelisihDaaya' => 'nullable',
            'Ampere' => 'required',
            
        ]);
        $SelisihDaya = $request->PermoDayaBaru - $request->PermoDayaLama;
        PermohonanPbpd::create([
            'IdPel' => $request->IdPel,
            'NamaPemohon' => $request->NamaPemohon,
            'TglSuratDiterima' => $request->TglSuratDiterima,
            'NoWhatsapp' => $request->NoWhatsapp,
            'AplManajemenSurat' => $request->AplManajemenSurat,
            'PermoDayaLama' => $request->PermoDayaLama,
            'PermoDayaBaru' => $request->PermoDayaBaru,
            'SelisihDaya' => $SelisihDaya,
            'Ampere' => $request->Ampere,
            'Status' => 'Permohonan',

        ]);
        
        return redirect()->route('permohonanpbpd.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editpbpd = PermohonanPbpd::find($id);
        return view('permohonanpbpd.edit', compact('editpbpd'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'IdPel' => 'required',
            'NamaPemohon' => 'required',
            'TglSuratDiterima' => 'required',
            'NoWhatsapp' => 'required',
            'AplManajemenSurat' => 'required',
            'PermoDayaLama' => 'required',
            'PermoDayaBaru' => 'required',
            'SelisihDaaya' => 'nullable',
            'Ampere' => 'required',
        ]);
        $SelisihDaya = $request->PermoDayaBaru - $request->PermoDayaLama;
        $editpbpd = PermohonanPbpd::find($id);
        $editpbpd->update([
            'IdPel' => $request->IdPel,
            'NamaPemohon' => $request->NamaPemohon,
            'TglSuratDiterima' => $request->TglSuratDiterima,
            'NoWhatsapp' => $request->NoWhatsapp,
            'AplManajemenSurat' => $request->AplManajemenSurat,
            'PermoDayaLama' => $request->PermoDayaLama,
            'PermoDayaBaru' => $request->PermoDayaBaru,
            'SelisihDaya' => $SelisihDaya,
            'Ampere' => $request->Ampere,
            'Status' => 'Permohonan',
        ]);
        return redirect()->route('permohonanpbpd.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapupbpd = PermohonanPbpd::find($id);
        $hapupbpd->delete();

        return redirect()->route('permohonanpbpd.index');
    }
}
