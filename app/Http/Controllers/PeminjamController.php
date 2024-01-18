<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjam = Peminjam::orderBy('id', 'desc')->paginate(4);
        return view('peminjam.index', compact('peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peminjam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $peminjam=  $request->validate([
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required'
        ]);

        Peminjam::create([
            'nama_peminjam' => $request->nama_peminjam,
            'judul_buku' => $request->judul_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali
        ]);

        return redirect('/peminjam')->with('berhasil', 'Data Tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjam $peminjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjam $peminjam)
    {
        // $peminjam = Peminjam::find($id);
        // dd($id);
        return view('peminjam.edit', compact('peminjam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjam $peminjam)
    {
        // dd($request->all());
        // $peminjam = Peminjam::find($id);
        $peminjam->update($request->all());
        return redirect()->route('peminjam.index')->with('berhasil', 'Data Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $peminjam = Peminjam::find($id);
        $peminjam->delete();
        return redirect()->route('peminjam.index')->with('berhasil', 'Data Terhapus');
    }
}
