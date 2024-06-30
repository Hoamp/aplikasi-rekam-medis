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
    public function pasienCetak(){
        $pasien = Pasien::latest()->get();

        return view("laporan.pasien.cetak", compact('pasien'));
    }

    public function kelengkapan(){
        $kelengkapan = Kelengkapan::latest()->paginate(7);

        return view("laporan.kelengkapan.index", compact('kelengkapan'));
    }
    public function kelengkapanCetak(){
        $kelengkapan = Kelengkapan::with(['pasien', 'detail'])->latest()->get();


        return view("laporan.kelengkapan.cetak", compact('kelengkapan'));
    }
}
