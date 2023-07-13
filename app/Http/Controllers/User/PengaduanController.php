<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Profil;
use Illuminate\Support\Facades\File;

class PengaduanController extends Controller
{
    public function index()
    {
        $profil = Profil::findorfail(1);
        return view('user.pengaduan', compact('profil'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            // 'id_pelanggan' => 'required',
            'keluhan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|max:2048',
            'alamat' => 'required'
        ]);


        $namaFile = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->move('galeri/pengaduan', $namaFile);

        $nilai = Pengaduan::create([
            'nama' => $request->nama,
            'id_pelanggan' => 1,
            'keluhan' => $request->keluhan,
            'foto' => $namaFile,
            'alamat' => $request->alamat
        ]);
        // dd($nilai);

        $nilai->save();
        return redirect('pengaduan')->with('created', 'Data berhasil disimpan');
    }
}
