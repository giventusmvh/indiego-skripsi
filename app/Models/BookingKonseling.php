<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingKonseling extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_jk',
        'id_member',
        'buktiBayar',
        'isPaid',
        'isDone',
        'isCancel',
        
        
    ];
}
