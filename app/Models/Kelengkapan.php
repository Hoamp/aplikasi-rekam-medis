<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelengkapan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_analisis';

    protected $guarded = ['id_analisis'];

    public function pasien(){
        return $this->belongsTo(Pasien::class, 'no_rm', "no_rm");
    }

    public function detail(){
        return $this->hasMany(DetailKelengkapan::class, 'id_analisis', 'id_analisis');
    }
}
