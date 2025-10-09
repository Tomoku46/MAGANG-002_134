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
        $data = PermohonanPbpd::onlyTrashed()->get()->map(function($item) {
            $item->asal = 'permohonan';
            return $item;
        });
        $terkirim = \App\Models\PbpdTerkirim::onlyTrashed()
            ->with(['permohonanPbpd', 'pbpdTersurvei'])
            ->get()->map(function($item) {
                $item->asal = 'terkirim';
                return $item;
            });
        $allRiwayat = $data->concat($terkirim);

        return view('riwayathapus.index', compact('allRiwayat'));
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
        // Restore semua permohonan
        \App\Models\PermohonanPbpd::onlyTrashed()->restore();

        // Restore semua tersurvei
        \App\Models\PbpdTersurvei::onlyTrashed()->restore();
        \App\Models\PbpdTerkirim::onlyTrashed()->restore();

        return redirect()->route('riwayathapus.index')->with('success', 'Semua data berhasil dipulihkan!');
    }
    
    public function restore($id, Request $request)
    {
        $asal = $request->get('asal');
        if ($asal == 'terkirim') {
            $terkirim = \App\Models\PbpdTerkirim::withTrashed()->findOrFail($id);
            $terkirim->restore();
        } else {
            $permohonan = PermohonanPbpd::withTrashed()->findOrFail($id);
            $permohonan->restore();
            // restore relasi jika perlu
        }
        return redirect()->route('riwayathapus.index')->with('success', 'Data berhasil dipulihkan!');
    }

    public function forceDelete($id, Request $request)
    {
        $asal = $request->get('asal');
        if ($asal == 'terkirim') {
            $terkirim = \App\Models\PbpdTerkirim::withTrashed()->findOrFail($id);
            $terkirim->forceDelete();
        } else {
            $permohonan = PermohonanPbpd::withTrashed()->findOrFail($id);
            $permohonan->forceDelete();
        }
        return redirect()->route('riwayathapus.index')->with('success', 'Data berhasil dihapus permanen!');
    }
}
