<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pasangbaru;
use App\Models\Profil;
use Illuminate\Http\Request;

class PasangBaruController extends Controller
{
    public function index()
    {
        $profil = Profil::findorfail(1);
        $pasang = Pasangbaru::find(1);
        return view('user.pasang', compact('profil', 'pasang'));
    }
}
