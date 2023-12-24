<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Pengajuan;
use App\Models\Profil;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $profil = Profil::findorfail(1);
        return view('user.pengajuan', compact('profil'));
    }

    public function store(Request $request)
    {


        // $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'alamat' => 'required',
        //     'kecamatan' => 'required',
        //     'desa' => 'required',
        // ]);
        $row = Pengaduan::count();
        $kec = $request->kecamatan;
        $row++;
        $row = sprintf("%03s", $row);

        dd($row);

        // $nilai = Pengajuan::create([
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'alamat' => $request->alamat,
        // ]);
        // // dd($nilai);

        // $nilai->save();
        return redirect('pengaduan')->with('created', 'Pengaduan berhasil dikirim');
    }
}
