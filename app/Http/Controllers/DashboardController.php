<?php

namespace App\Http\Controllers;

use App\Models\Coba;
use App\Models\PermohonanPbpd;
use App\Models\PbpdTersurvei;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahPermohonan = PermohonanPbpd::where('Status', 'permohonan')->count();
        $jumlahTersurvei = PermohonanPbpd::where('Status', 'tersurvei')->count();

        // Ambil semua tagging lokasi dari database tersurvei
        $lokasi = \App\Models\PbpdTersurvei::with('permohonanPbpd')
            ->whereNotNull('TaggingLokasi')
            ->get(['TaggingLokasi', 'IdPermohonan']); // Ambil field yang dibutuhkan

        return view('dashboard.index', compact('jumlahPermohonan', 'jumlahTersurvei', 'lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
    }
}
