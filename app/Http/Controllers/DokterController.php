<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(){
        $dataDokter = Dokter::latest()->paginate(5);
        return view('dokter.index', compact('dataDokter'));
    }

    public function tambah(){
        return view('dokter.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'spesialis' => 'required',
            'no_telp' => 'required',
        ]);

        Dokter::create([
            'nama_dokter' => $request->nama,
            'alamat' => $request->alamat,
            'spesialis' => $request->spesialis,
            'no_telp' => $request->no_telp,
            'username' => ' ',
            'password' => ' ',
        ]);

        return redirect()->route('dokter.index');
    }

    public function hapus($id){
        $dokter = Dokter::find($id);
        $dokter->delete();
        return redirect()->route('dokter.index');
    }
}
