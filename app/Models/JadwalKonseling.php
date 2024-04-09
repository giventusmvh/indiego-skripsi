<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKonseling extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_konselor',
        'tgl_konseling',
        'jam_konseling',
        'topik_konseling',
        'isBooked',
        
        
    ];
}
