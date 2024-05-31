<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;
    protected $primaryKey = 'contribution_id';
    protected $fillable = [
        'contribution_name', 
        'payment_status', 
        'amount', 
    ];
}
