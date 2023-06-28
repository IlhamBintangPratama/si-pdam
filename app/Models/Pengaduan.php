<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = [
        'id_pelanggan',
        'nama',
        'alamat',
        'foto',
        'keluhan'
    ];

    public function pelanggan()
    {
        return $this->belongsTo('App\Models\Pelanggan','id_pelanggan', 'id');
    }
}
