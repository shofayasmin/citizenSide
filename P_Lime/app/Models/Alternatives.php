<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatives extends Model
{
    use HasFactory;
    protected $fillable = [
        'rumah_id',
        'jumlah_usia_produktif',
        'jumlah_anggota_keluarga',
        'kondisi_rumah',
        'jumlah_usia_lanjut',
        'pendapatan_total',
    ];

    public function rumah()
    {
        return $this->belongsTo(Rumah::class);
    }
    
}
