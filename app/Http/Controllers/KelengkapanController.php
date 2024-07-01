<?php

namespace App\Http\Controllers;

use App\Models\DetailKelengkapan;
use App\Models\Formulir;
use App\Models\Kelengkapan;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class KelengkapanController extends Controller
{
    public function index(Request $request){
        if(request('cari')){
            $pasien = Pasien::with(['kelengkapan'])->where('no_rm', request('cari'))->paginate(1);
        }else{
            $pasien = Pasien::with(['kelengkapan'])->latest()->paginate(7);
        }

        return view('kelengkapan.index', compact('pasien'));
    }

    public function tambah($id){
        $pasien = Pasien::find($id);
        $formulir = Formulir::first();
        return view('kelengkapan.tambah', compact('pasien', 'formulir'));
    }

    public function store(Request $request){
        $request->validate([
            'no_rm' => 'required',
            'nama_pasien' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'terapi' => 'required',
            'pemeriksaan' => 'required',
            'tidak_ada_tipe_x' => 'required',
            'tidak_ada_coretan' => 'required',
            'tanggal' => 'required',
            'tidak_ada_singkatan_baku' => 'required',
            'tanda_tangan' => 'required',
            'nama_terang' => 'required',
        ]);
        $data = $request->all();
        $count = 0;


        $kelengkapan = Kelengkapan::create([
            'no_rm' => $request->no_rm_pasien,
            'id_formulir' => $request->id_formulir,
            'tanggal' => $request->tanggal
        ]);

        $jumlahAda = 0;
        $jumlahTidakAda = 0;
        $hasilAkhirKelengkapan = 0;
        $hasil_catatan = [];

        $data['tanggal'] = "Ada";

        foreach($data as $key => $val){
            $count++;
            $nama_review = "";
            $item_review = $key;
            $hasil_item = $val;

            if($count == 1){
                continue;
            } elseif($count >= 2 && $count <= 6){
                $nama_review = "identifikasi";  
            } elseif($count >= 7 && $count <= 8 ){
                $nama_review = "pelaporan";  
            }elseif($count >= 9 && $count <= 11 ){
                $nama_review = "pencatatan";  
            }elseif($count >= 12 && $count <= 13){
                $nama_review = "autentifikasi";  
            }else {
                continue;
            }

            if($val == "Ada" || ($nama_review == 'pencatatan' && $hasil_item == "Tidak Ada")){
                $jumlahAda++;
            }else{
                $jumlahTidakAda++;
                $hasil_catatan[$jumlahTidakAda] = str_replace('_', " ", $key);
            }

            DetailKelengkapan::create([
                'id_analisis' => $kelengkapan->id_analisis,
                "nama_review" => $nama_review,
                "item_review" => $item_review,
                "hasil_item" => $hasil_item,
            ]);

        }
        if($jumlahAda == 12){
            $hasilAkhirKelengkapan = "Lengkap";
        }

        if($hasilAkhirKelengkapan < 13){
            $hasilAkhirKelengkapan =  floor($jumlahAda / 12 * 100);
        }

        $kelengkapan->update([
            'hasil_akhir' => $hasilAkhirKelengkapan,
            'hasil_catatan' => $hasil_catatan
        ]);

        return redirect()->route('kelengkapan.index')->with('success', 'Sukses analisis kelengkapan pasien');
    }


    public function editKelengkapan($id){
        $kelengkapan = Kelengkapan::with(['pasien', 'detail'])->where('id_analisis', $id)->first();

        $detailKelengkapan = DetailKelengkapan::where('id_analisis', "=",$kelengkapan->id_analisis)->get();

        $formulir = Formulir::first();

        return view('kelengkapan.edit', compact('kelengkapan', 'detailKelengkapan', 'formulir'));
    }

    public function updateKelengkapan(Request $request){
        $request->validate([
            'no_rm' => 'required',
            'nama_pasien' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'tidak_ada_tipe_x' => 'required',
            'tidak_ada_coretan' => 'required',
            'tanggal' => 'required',
            'tidak_ada_singkatan_baku' => 'required',
            'tanda_tangan' => 'required',
            'nama_terang' => 'required',
        ]);
        $data = $request->all();
        $count = 0;


        $kelengkapan = Kelengkapan::find($request->kelengkapan);

        $jumlahAda = 0;
        $jumlahTidakAda = 0;
        $hasilAkhirKelengkapan = 0;
        $hasil_catatan = [];

        // return $request;

        $tanggal = $data['tanggal'];
        $data['tanggal'] = "Ada";

        foreach($data as $key => $val){
            $count++;
            $item_review = $key;
            $hasil_item = $val;

            if($count == 1){
                continue;
            } elseif($count >= 2 && $count <= 6){
                $nama_review = "identifikasi";  
            } elseif($count >= 7 && $count <= 8 ){
                $nama_review = "pelaporan";  
            }elseif($count >= 9 && $count <= 11 ){
                $nama_review = "pencatatan";  
            }elseif($count >= 12 && $count <= 13){
                $nama_review = "autentifikasi";  
            }else {
                continue;
            }

            if($key == '_token' || $key == "no_rm_pasien" || $key == "kelengkapan" || $key == "id_formulir"){
                continue;
            }
            $detail = DetailKelengkapan::where('id_analisis', $kelengkapan->id_analisis)
                                        ->where('item_review', $item_review)->first();
            $detail->update([
                'hasil_item' => $hasil_item
            ]);

            if($val == "Ada" || ($nama_review == 'pencatatan' && $hasil_item == "Tidak Ada")){
                $jumlahAda++;
            }else{
                $jumlahTidakAda++;
                $hasil_catatan[$jumlahTidakAda] = str_replace('_', " ", $key);
            }

        }
        if($jumlahAda == 12){
            $hasilAkhirKelengkapan = "Lengkap";
        }

        if($hasilAkhirKelengkapan < 13){
            $hasilAkhirKelengkapan =  floor($jumlahAda / 12 * 100);
        }

        $kelengkapan->update([
            'hasil_akhir' => $hasilAkhirKelengkapan,
            'hasil_catatan' => $hasil_catatan,
            'tanggal' => $tanggal
        ]);

        return redirect()->route('kelengkapan.index')->with('success', 'Sukses edit analisis kelengkapan pasien');
    }

    public function detail($id){
        $pasien = Pasien::find($id);

        $kelengkapan = Kelengkapan::with(['pasien'])->where('no_rm', $pasien->no_rm)->first();

        $detailKelengkapan = DetailKelengkapan::where('id_analisis', "=",$kelengkapan->id_analisis)->get();

        return view('kelengkapan.detail', compact('pasien', 'kelengkapan','detailKelengkapan'));
    }
}
