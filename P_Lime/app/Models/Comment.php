<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['laporan_id', 'author', 'comment'];

public function laporan()
{
    return $this->belongsTo(Laporan::class);
}
}
