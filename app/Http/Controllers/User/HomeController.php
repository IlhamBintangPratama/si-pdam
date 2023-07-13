<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use App\Models\Profil;
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
}
