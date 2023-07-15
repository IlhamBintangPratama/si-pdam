<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
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

    public function cek(Request $request)
    {
        $request->validate([
            'no_pelanggan' => 'required',
        ],
        [ 'no_pelanggan.required' => ':attribute harus di isi.']);
        
        $profil = Profil::findorfail(1);
        $no_rekening_air = $request->get('no_pelanggan');
        $pengaduan = Pelanggan::where('no_rekening_air' , $no_rekening_air)->first();
        return view('user.detail_pengaduan', compact('profil','pengaduan'));    
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
            'id_pelanggan' => $request->id_pelanggan,
            'keluhan' => $request->keluhan,
            'foto' => $namaFile,
            'alamat' => $request->alamat
        ]);
        // dd($nilai);

        $nilai->save();
        return redirect('pengaduan')->with('created', 'Pengaduan berhasil dikirim');
    }
}