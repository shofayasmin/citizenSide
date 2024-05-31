<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $primaryKey = 'income_id';
    protected $fillable = [
        'income_name', 
        'income_type', 
        'amount', 
        'description', 
    ];
}
