<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasangbaru extends Model
{
    // use HasFactory;
    protected $fillable = [
        'persyaratan',
        'harga_pasang'
    ];
    // protected $table = ['tagihan'];
}
