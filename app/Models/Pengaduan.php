<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = [
        'id',
        'id_pelanggan',
        'nama',
        'alamat',
        'id_kecamatan',
        'id_desa',
        'foto',
        'keluhan',
        'tema',
        'status',
    ];

    public function pelanggan()
    {
        return $this->belongsTo('App\Models\Pelanggan','id_pelanggan', 'id');
    }
    
    public function desa()
    {
        return $this->belongsTo('App\Models\Desa', 'id_desa', 'id');
    }

    public function kecamatan() {

        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan', 'id');
    }
}
