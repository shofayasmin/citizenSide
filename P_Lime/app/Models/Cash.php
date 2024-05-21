<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $primaryKey = 'cash_id';
    protected $fillable = ['range_time', 'total_money', 'description'];
}
