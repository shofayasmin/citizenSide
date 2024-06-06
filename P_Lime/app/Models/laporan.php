<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $primaryKey = 'laporan_id';
    protected $fillable = [
        'pengirim', 
        'judul',  
        'deskripsi', 
        'gambar', 
        'status',
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class,'laporan_id','laporan_id');
    }
    
}

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['laporan_id', 'user_id', 'content'];

    public function laporan()
    {
        return $this->belongsTo(Laporan::class, 'laporan_id', 'laporan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id','user_id');
    }

    // public function warga()
    // {
    //     return $this->belongsTo(Warga::class, 'pengirim', 'nik');
    // }
    
}
