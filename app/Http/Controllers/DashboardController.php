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
        $jumlahPermohonan = \App\Models\PermohonanPbpd::where('Status', 'Permohonan')->count();
        $jumlahTersurvei = \App\Models\PermohonanPbpd::where('Status', 'Tersurvei')->count();
        $jumlahTerkirim = \App\Models\PermohonanPbpd::where('Status', 'Terkirim')->count();

        // Data lokasi untuk peta, sesuaikan dengan kebutuhan Anda
        $lokasi = \App\Models\PbpdTersurvei::with('permohonanPbpd')->get();

        return view('dashboard.index', compact('jumlahPermohonan', 'jumlahTersurvei', 'jumlahTerkirim', 'lokasi'));
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
