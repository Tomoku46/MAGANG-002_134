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
        $coba = PermohonanPbpd::all();
        return view('permohonanpbpd.index', compact('coba'));
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
            'SelisihDaya' => 'required',
            'Ampere' => 'required',
        ]);
        PermohonanPbpd::create([
            'IdPel' => $request->IdPel,
            'NamaPemohon' => $request->NamaPemohon,
            'TglSuratDiterima' => $request->TglSuratDiterima,
            'NoWhatsapp' => $request->NoWhatsapp,
            'AplManajemenSurat' => $request->AplManajemenSurat,
            'PermoDayaLama' => $request->PermoDayaLama,
            'PermoDayaBaru' => $request->PermoDayaBaru,
            'SelisihDaya' => $request->SelisihDaya,
            'Ampere' => $request->Ampere,

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
