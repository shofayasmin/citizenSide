<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    protected $primaryKey = 'id_acara';
    protected $fillable = [
        'judul', // Tambahkan 'judul' ke dalam daftar fillable
        'deskripsi',
        'tipe_acara',
        'image',
        // Kolom lain yang ingin Anda masukkan ke dalam fillable
    ];
}
