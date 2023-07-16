<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    // use HasFactory;
    protected $fillable = [
        'id',
        'no_rekening_air',
        'nama',
        'alamat',
        'jumlah_tagihan'
    ];
    // protected $table = ['tagihan'];
}
