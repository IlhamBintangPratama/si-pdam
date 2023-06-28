<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
        'email',
        'foto',
        'no_rekening_air',
        'username',
        'password'
    ];
    
    public function pengaduan()
    {
        return $this->hasMany('App\Models\Pengaduan','id_pelanggan');
    }
}
