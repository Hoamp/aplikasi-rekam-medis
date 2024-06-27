<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        $pasien = Pasien::latest()->paginate(7);
        return view('pasien.index', compact('pasien'));
    }

    public function tambah(){
        return view('pasien.tambah');
    }

    public function store(Request $request){
        Pasien::create([
            'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telp' => $request->no_telp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'umur' => $request->umur,
        ]);

        return redirect()->route('pasien.index');
    }
    
    public function delete($id){
        $pasien = Pasien::find($id);
        $pasien->delete();
        
        return redirect()->route('pasien.index');
    }

    public function detail($id){
        $pasien = Pasien::find($id);

        return view('pasien.detail', compact('pasien'));
    }
}
