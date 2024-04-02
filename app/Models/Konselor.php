<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Konselor extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'namaKonselor',
        'email',
        'password',
        'jkKonselor',
        'tgllahirKonselor',
        'telpKonselor',
        'scanKTPKonselor',
        'scanSertifKonselor',
        'scanFotoKonselor',
        'statusAktivasi',
        'latitudeKonselor',
        'longitudeKonselor',
        
    ];
}
