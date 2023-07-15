<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Authenticatable
{
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'no_telp',
        'email',
        'foto',
        'no_rekening_air'
    ];
    
    public function pengaduan()
    {
        return $this->hasMany('App\Models\Pengaduan','id_pelanggan');
    }
}
