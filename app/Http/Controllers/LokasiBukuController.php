<?php

namespace App\Http\Controllers;

use App\Models\LokasiBuku;
use Illuminate\Http\Request;

class LokasiBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokasi = LokasiBuku::orderBy('id', 'desc')->paginate(4);
        return view('lokasi.index', compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lokasi=  $request->validate([
            'kode_buku' => 'required',
            'no_rak' => 'required',
            'section' => 'required'
        ]);

        LokasiBuku::create([
            'kode_buku' => $request->kode_buku,
            'no_rak' => $request->no_rak,
            'section' => $request->section
        ]);

        return view('/lokasi')->with('berhasil', 'Data Tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(LokasiBuku $lokasiBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LokasiBuku $lokasiBuku)
    {
        return view('lokasi.edit', compact('lokasiBuku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LokasiBuku $lokasiBuku)
    {
        $lokasiBuku->update($request->all());
        return redirect()->route('lokasi.index')->with('berhasil', 'Data Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LokasiBuku $lokasiBuku)
    {
        $lokasiBuku->delete();
        return redirect()->route('lokasi.index')->with('berhasil', 'Data Terhapus');
    }
}
