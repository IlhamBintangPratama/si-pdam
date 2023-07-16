<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use App\Models\Profil;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $profil = Profil::findOrFail(1);
        $berita = Informasi::all();
        $beritabaru = Informasi::orderBy('id', 'DESC')->get();
        return view('user.berita', compact('profil', 'berita', 'beritabaru'));
    }

    public function detail($id)
    {
        $profil = Profil::findOrFail(1);
        $berita = Informasi::findOrFail($id);
        return view('user.detail_berita', compact('berita', 'profil'));
    }
}
