<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'tempat', 
        'tanggal',
        'jk',
        'agama',
        'no_hp',
        'alamat',
        'by_email',
    ];
}
