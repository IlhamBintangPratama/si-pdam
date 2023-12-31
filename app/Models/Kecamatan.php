<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $fillable = [
        'id',
        'nama_kecamatan',
        'kode'
    ];

    public function kecamatan() {

        return $this->hasMany('App\Models\Desa', 'id_kecamatan');
    
    }

    public function pelanggans() {
        return $this->hasMany('App\Models\Pelanggan', 'id_kecamatan');
    }

    public function pengaduan() {

        return $this->hasMany('App\Models\Pengaduan', 'id_kecamatan');
    
    }
}
