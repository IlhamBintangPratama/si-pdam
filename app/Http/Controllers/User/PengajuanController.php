<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\Pelanggan;
use App\Models\Pengajuan;
use App\Models\Profil;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $profil = Profil::findorfail(1);
        $kec = Kecamatan::all();
        $desa = Desa::all();
        return view('user.pengajuan', compact('profil','kec','desa'));
    }

    public function store(Request $request)
    {


        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required|numeric',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required'
        ],
        [
            'required' => ':attribute harus di isi.',
            'email' => ':attribute format harus sesuai',
            'numeric' => ':attribute format harus numeric'
        ],
    );

        $row = Pelanggan::count();
        $kec = $request->kecamatan;
        $kodepos = Kecamatan::where('id',$kec)->first();
        $row++;
        $row = sprintf("%03s", $row);
        $no_rek = $kodepos->kode.date('y').$row;
        

        $nilai = Pelanggan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'no_rekening_air' =>$no_rek,
            'id_desa' => $request->desa,
            'id_kecamatan' => $request->kecamatan
        ]);
        // dd($nilai);

        $nilai->save();
        return redirect('pengajuan')->with('created', 'Pengajuan berhasil dikirim');
    }
}
