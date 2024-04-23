<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reschedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_jk',
        'id_member',
        'tgl_ganti',
        'jam_ganti',
        'isConfirmed',
        'isRejected',
        
        
    ];
}
