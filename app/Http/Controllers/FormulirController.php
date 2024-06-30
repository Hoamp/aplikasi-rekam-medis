<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function index(){
        $formulir = Formulir::paginate(5);
        
        return view('formulir.index', compact('formulir'));
    }

    public function create(){
        return view('formulir.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required'
        ]);

        Formulir::create([
            'nama_formulir' => $request->nama
        ]);

        return redirect()->route('formulir.index');
    }

    public function hapus($id){
        $formulir = Formulir::find($id);
        $formulir->delete();
        return redirect()->route('formulir.index');
    }
}
