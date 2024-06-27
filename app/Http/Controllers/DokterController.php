<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(){
        $dokter = Dokter::latest()->first();
        return view('dokter.index', compact('dokter'));
    }
}
