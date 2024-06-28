<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KelengkapanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('dashboard');
    Route::get('/home', function () {
        return redirect()->route('dashboard');
    })->name('home');

    Route::get('/kelengkapan', [KelengkapanController::class, 'index'])->name('kelengkapan.index');
    Route::get('/kelengkapan/tambah/{id}', [KelengkapanController::class, 'tambah'])->name('kelengkapan.tambah');
    Route::post('/kelengkapan/tambah', [KelengkapanController::class, 'store'])->name('kelengkapan.store');
    Route::get('/kelengkapan/detail/{id}', [KelengkapanController::class, 'detail'])->name('kelengkapan.detail');
    Route::get('/kelengkapan/edit/{id}', [KelengkapanController::class, 'editKelengkapan'])->name('kelengkapan.edit');
    Route::post('/kelengkapan/update', [KelengkapanController::class, 'updateKelengkapan'])->name('kelengkapan.update');
    
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
    Route::get('/pasien/tambah', [PasienController::class, 'tambah'])->name('pasien.tambah');
    Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');

    Route::get('/pasien/delete/{id}', [PasienController::class, 'delete'])->name('pasien.delete');
    Route::get('/pasien/detail/{id}', [PasienController::class, 'detail'])->name('pasien.detail');


    Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');
    
    
    Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');

    
});
