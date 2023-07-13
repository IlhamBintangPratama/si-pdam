<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = [
        'facebook',
        'instagram',
        'no_telp',
        'email',
        'alamat',
        'visi',
        'misi',
    ];
}
