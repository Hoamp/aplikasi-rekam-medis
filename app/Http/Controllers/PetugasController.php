<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index(){
        $petugas = Petugas::all();

        return view('petugas.index', compact('petugas'));
    }

    public function tambah(){
        return view('petugas.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => "required",
            'username' => "required",
            'password' => "required",
        ]);

        Petugas::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('petugas.index');
    }

    public function hapus($id){
        $petugas = Petugas::find($id);

        $petugas->delete();

        return redirect()->route('petugas.index');
    }
}
