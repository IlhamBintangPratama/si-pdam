<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('user.berita');
    }

    public function detail($id)
    {
        return view('user.detail_berita');
    }
}
