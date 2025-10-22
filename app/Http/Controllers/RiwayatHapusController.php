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
        $deletedPermohonan = \App\Models\PermohonanPbpd::onlyTrashed()->get()->map(function ($item) {
            $item->asal = 'permohonan';
            return $item;
        });

        $deletedTersurvei = PbpdTersurvei::onlyTrashed()->get()->map(function ($item) {
            $item->asal = 'tersurvei';
            return $item;
        });

        $deletedTerkirim = \App\Models\PbpdTerkirim::onlyTrashed()->get()->map(function ($item) {
            $item->asal = 'terkirim';
            return $item;
        });

        $allRiwayat = $deletedPermohonan->merge($deletedTersurvei)->merge($deletedTerkirim);

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
    public function destroy($model, $id)
    {
        switch ($model) {
            case 'permohonan':
                $data = \App\Models\PermohonanPbpd::withTrashed()->findOrFail($id);
                $data->forceDelete();
                break;
            case 'tersurvei':
                $data = \App\Models\PbpdTersurvei::withTrashed()->findOrFail($id);
                $data->forceDelete();
                break;
            case 'terkirim':
                $data = \App\Models\PbpdTerkirim::withTrashed()->findOrFail($id);
                $data->forceDelete();
                break;
            default:
                return redirect()->route('riwayathapus.index')->with('error', 'Model tidak valid!');
        }
        return redirect()->route('riwayathapus.index')->with('success', 'Data berhasil dihapus permanen!');
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
    
    public function restore($model, $id)
    {
        // Pulihkan data berdasarkan model
        switch ($model) {
            case 'permohonan':
                $data = \App\Models\PermohonanPbpd::withTrashed()->findOrFail($id);
                $data->restore();
                break;

            case 'tersurvei':
                $data = \App\Models\PbpdTersurvei::withTrashed()->findOrFail($id);
                $data->restore();
                break;

            case 'terkirim':
                $data = \App\Models\PbpdTerkirim::withTrashed()->findOrFail($id);
                $data->restore();
                break;

            default:
                return redirect()->route('riwayathapus.index')->with('error', 'Model tidak valid!');
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

    public function forceDeleteSelected(Request $request)
    {
        $idsCsv = $request->input('ids');
        if (!$idsCsv) {
            return redirect()->route('riwayathapus.index')->with('success', 'Tidak ada data yang dipilih.');
        }
        $ids = explode(',', $idsCsv);
        foreach ($ids as $id) {
            $id = trim($id);
            // Try to find in Terkirim first
            $found = false;
            $terkirim = \App\Models\PbpdTerkirim::withTrashed()->find($id);
            if ($terkirim) {
                $terkirim->forceDelete();
                $found = true;
            }
            if (!$found) {
                $permohonan = PermohonanPbpd::withTrashed()->find($id);
                if ($permohonan) {
                    $permohonan->forceDelete();
                }
            }
        }
        return redirect()->route('riwayathapus.index')->with('success', 'Data terpilih berhasil dihapus permanen!');
    }
}
