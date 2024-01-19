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

        return redirect('/lokasi')->with('berhasil', 'Data Tersimpan');
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
    public function edit(LokasiBuku $lokasi)
    {
        return view('lokasi.edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LokasiBuku $lokasi)
    {
        $lokasi->update($request->all());
        return redirect()->route('lokasi.index')->with('berhasil', 'Data Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LokasiBuku $lokasi)
    {
        $lokasi->delete();
        return redirect()->route('lokasi.index')->with('berhasil', 'Data Terhapus');
    }

    public function cari(Request $request)
    {
        // dd($request->cari);
        $cari = $request->cari;
        $lokasi = LokasiBuku::where('kode_buku', 'like', "%" . $cari . "%")->paginate(4);
        // dd($lokasi);
        return view('lokasi.index', compact('lokasi'));
    }
}
