<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKelengkapan extends Model
{
    use HasFactory;

    protected $guarded = ['id_detail'];

    protected $primaryKey = 'id_detail';
}
