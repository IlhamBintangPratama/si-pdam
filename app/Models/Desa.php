<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $fillable = [
        'id',
        'nama_desa',
        'id_kecamatan'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class,'nama_kecamatan');
    }

    public function desa() {

        return $this->hasMany('App\Models\Pelanggan', 'id_kecamatan');
    
    }
}
