<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'asal_sekolah', 
        'minat_jurusan',
        'nilaiUN',
        'photo',
        'status',
    ];
}
