<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('dashboard');

    
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
    Route::get('/pasien/tambah', [PasienController::class, 'tambah'])->name('pasien.tambah');
    Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');

    Route::get('/pasien/delete/{id}', [PasienController::class, 'delete'])->name('pasien.delete');
    Route::get('/pasien/detail/{id}', [PasienController::class, 'detail'])->name('pasien.detail');


    Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');
});
