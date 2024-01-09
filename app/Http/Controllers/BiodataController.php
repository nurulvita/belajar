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
}
