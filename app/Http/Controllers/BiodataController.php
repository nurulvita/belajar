<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;


class BiodataController extends Controller
{
    public function index(){
        $bio = Biodata::orderBy('id', 'desc')->paginate(4);
        // dd($bio);
        return view('biodata.index', compact('bio'));
    }

    public function create(){
        return view('biodata.create');
    }

    public function store(Request $request){
        // dd($request->all());
      $bio=  $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|numeric',
            'kota' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Biodata::create($bio); /cara 1
        // Biodata::create($request->all()); //cara 2
        if ($image = $request->file('image')) {
            $destionationPath = 'image/';
            $profileImage = date('YmdHis').'.'.$request->file('image')->getClientOriginalName();
            $image->move($destionationPath, $profileImage);
            $bio['image'] = "$profileImage";
        }

        Biodata::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'kota' => $request->kota,
            'image' => $bio['image']
        ]); //cara 3

        // return redirect('/biodata')->with('berhasil', 'Data Tersimpan'); //url
        return redirect()->route('biodata.index')->with('berhasil', 'Data Tersimpan'); //route
    }

    public function edit($id){
        $bio = Biodata::find($id);
        return view('biodata.edit', compact('bio'));
    }

    public function update(Request $request, $id){
        $bio = Biodata::find($id);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destionationPath = 'image/';
            $profileImage = date('YmdHis').'.'.$request->file('image')->getClientOriginalName();
            $image->move($destionationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else{
            unset($input['image']);
        }

        $bio->update($input);
        return redirect()->route('biodata.index')->with('berhasil', 'Data Terupdate');
    }

    public function destroy($id){
        $bio = Biodata::find($id);
        $bio->delete();
        return redirect()->route('biodata.index')->with('berhasil', 'Data Terhapus');
    }
}
