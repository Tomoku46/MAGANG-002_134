<?php

namespace App\Http\Controllers;

use App\Models\PermohonanPbpd;
use App\Models\PbpdTersurvei;
use Illuminate\Http\Request;

class RiwayatHapusController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = PermohonanPbpd::onlyTrashed()->get();
        return view('riwayathapus.index', compact('data'));
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

    public function restoreAll()
    {
        PermohonanPbpd::onlyTrashed()->restore();
        return redirect()->route('riwayathapus.index')->with('success', 'Semua data berhasil dipulihkan!');
    }
    
    public function restore($id)
    {
        \App\Models\PermohonanPbpd::withTrashed()->findOrFail($id)->restore();
        return redirect()->route('riwayathapus.index')->with('success', 'Data berhasil dipulihkan!');
    }
}
