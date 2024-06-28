<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $primaryKey = 'no_rm';

    protected $guarded = [];

    public function kelengkapan(){
        return $this->hasMany(Kelengkapan::class, 'no_rm', 'no_rm');
    }
}
