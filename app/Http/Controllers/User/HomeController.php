<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use App\Models\Profil;
use App\Models\Tagihan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profil = Profil::findorfail(1);
        $berita = Informasi::all();
        return view('user.home', compact('profil', 'berita'));
    }

    public function cek_tagihan(Request $request) {        
        $no_pelanggan = $request->get('no_pelanggan');
        $tagihan = Tagihan::where('no_pelanggan' , $no_pelanggan)->first();
        $profil = Profil::findorfail(1);
        return view('user.detail_tagihan', compact('profil', 'tagihan'));
    }
}