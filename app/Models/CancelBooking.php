<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_bk',   
        'isConfirmed',
        'isRejected',
        
    ];
}
