<?php

namespace App\Http\Controllers;

use App\Models\Coba;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coba = Coba::all();
        return view('dashboard.coba.index', compact('coba'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.coba.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
        ]);
        Coba::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
        ]);
        return redirect()->route('coba.index');
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
        $coba = Coba::find($id);
        return view('dashboard.coba.edit', compact('coba'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate([
            'nama' => 'required',
            'nim' => 'required',
        ]);
        $coba = Coba::find($id);
        $coba->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
        ]);
        return redirect()->route('coba.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coba = Coba::find($id);
        $coba->delete();

        return redirect()->route('coba.index');
    }
}
