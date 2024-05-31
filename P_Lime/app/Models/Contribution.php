<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    protected $primaryKey = 'contribution_id';
    protected $fillable = [
        'contribution_name', 
        'description',
        'payment_status', 
        'total_money',
    ];
}
