<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    use HasFactory;
    protected $primaryKey = 'rumah_id';
    protected $fillable = [
        'nama_pemilik', 
        'alamat', 
        'luas_bangunan', 
        'luas_tanah', 
        'jumlah_anggota_kk', 
    ];
}
