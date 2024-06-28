<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dokter;
use App\Models\Formulir;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Dokter::create([
            'nama_dokter' => 'Agung Prihananto',
            'alamat' => 'Jl. Tasikmadu-Kebakkramat, 04/01, Nangsri Kidul, Nangsri, Kebakkramat, Karanganyar',
            'spesialis' => 'Spesialis Umum',
            'no_telp' => '08157720228',
            'username' => 'dokter',
            'password' => 'dokter'
        ]);

        Petugas::create([
            'nama' => 'Ratna Eka Nur Aini',
            'username' => 'petugas1',
            'password' => 'petugas1'
        ]);
        Petugas::create([
            'nama' => 'Endang Sri Wahyuningsih',
            'username' => 'petugas2',
            'password' => 'petugas2'
        ]);
        Petugas::create([
            'nama' => 'Ida Wahyu',
            'username' => 'petugas3',
            'password' => 'petugas3'
        ]);

        User::create([
            'username' => "dokter",
            'password' => bcrypt('dokter'),
            'role' => 'dokter'
        ]);
        User::create([
            'username' => "petugas",
            'password' => bcrypt('petugas'),
            'role' => 'petugas'
        ]);

        Formulir::create([
            'nama_formulir' => "Resume Medis"
        ]);
    }
}
