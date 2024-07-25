<?php

namespace App\Http\Controllers;

use App\Models\DetailKelengkapan;
use App\Models\Kelengkapan;
use App\Models\Pasien;
use App\Models\Petugas;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function petugas(){
        $petugas = Petugas::latest()->paginate(7);

        return view("laporan.petugas.index", compact('petugas'));
    }
    public function petugasCetak(){
        $petugas = Petugas::latest()->get();

        return view("laporan.petugas.cetak", compact('petugas'));
    }

    public function pasien(){
        $pasien = Pasien::latest()->paginate(7);

        return view("laporan.pasien.index", compact('pasien'));
    }
    public function pasienCetak(Request $request){
        if(request('cari')){
            $pasien = Pasien::where('no_rm', request('cari'))->get();
            
            if(count($pasien) !== 0){
                $pasien = Pasien::with(['kelengkapan'])->where('no_rm', request('cari'))->paginate(7);                
            }else{
                $pasien = Pasien::with(['kelengkapan'])->where('nama_pasien', 'like', "%".request('cari')."%")->paginate(7);
            }
        }else{
            $pasien = Pasien::with(['kelengkapan'])->latest()->paginate(7);
        }

        return view("laporan.pasien.cetak", compact('pasien'));
    }

    public function kelengkapan(){
        $kelengkapan = Kelengkapan::latest()->paginate(7);

        return view("laporan.kelengkapan.index", compact('kelengkapan'));
    }
    public function kelengkapanCetak(Request $request){
        
        $kelengkapan = Kelengkapan::with(['pasien', 'detail'])->latest()->whereBetween('tanggal', [$request->awal, $request->akhir])->get();

        return view("laporan.kelengkapan.cetak", compact('kelengkapan'));
    }
}
