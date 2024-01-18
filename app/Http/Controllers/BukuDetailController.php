<?php

namespace App\Http\Controllers;

use App\Models\BukuDetail;
use Illuminate\Http\Request;

class BukuDetailController extends Controller
{
    public function index(){
        $buku = BukuDetail::orderBy('id', 'desc')->paginate(4);
        // dd($bio);
        return view('buku.index', compact('buku'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        dd($request->all());
      $buku=  $request->validate([
            'judul' => 'required',
            'penerbit' => 'required',
            'tanggal_terbit' => 'required'
        ]);

        BukuDetail::create([
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'tanggal_terbit' => $request->tanggal_terbit
        ]);

        return redirect('/buku')->with('berhasil', 'Data Tersimpan');
    }

    public function edit($id){
        $buku = BukuDetail::find($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id){
        $buku = BukuDetail::find($id);
        $buku->update($request->all());
        return redirect()->route('buku.index')->with('berhasil', 'Data Terupdate');
    }

    public function destroy($id){
        $buku = BukuDetail::find($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('berhasil', 'Data Terhapus');
    }


}
