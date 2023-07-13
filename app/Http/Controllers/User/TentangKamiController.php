<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        $profil = Profil::findorfail(1);
        return view('user.tentangkami', compact('profil'));
    }
}
