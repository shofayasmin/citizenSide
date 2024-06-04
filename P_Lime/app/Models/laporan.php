<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $primaryKey = 'umkm_id';
    protected $fillable = [
        'judul', 
        'deskripsi',  
        'gambar', 
        'pengirim',
        'status',
    ];
}
