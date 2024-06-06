<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{

    use HasFactory;
    protected $primaryKey = 'laporan_id';
    protected $fillable = [
        'judul', 
        'deskripsi',  
        'gambar',  
        'pengirim',
        'status'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class,'laporan_id','laporan_id');
    }
}
