<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
   protected $fillable = [
      'id',
      'nama',
      'email',
      'alamat',
      'id_kecamatan',
      'id_desa',
      'created_at'
   ];
}
