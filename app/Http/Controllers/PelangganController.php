<?php 
namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Pelanggan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $kec = $request->get('kecamatan');
        $pelanggan = Pelanggan::select('id','nama', 'email', 'foto', 'no_rekening_air','id_kecamatan','id_desa');

        if($search){
           $pelanggan -> where ('nama', 'LIKE', '%' . $search . '%' );
        }

        if($kec){
            $pelanggan -> where ('id_kecamatan', $kec );
        }

        $pelanggan = $pelanggan->get();


        
        $kecamatan = Kecamatan::get();

        // $group = $pelanggan->groupBy('id_kecamatan')->get('id_kecamatan');
        $jumlah = Pelanggan::query("SELECT id_kecamatan, count(*) AS jml");
        dd($jumlah);
        // $profil = User::select('name','level')->where('level', '=', 1)->first();
        // dd($profil);
        return view('menu-admin.pelanggan.index', compact('pelanggan','kecamatan'));
        
    }

    public function create()
    {
        return view('menu-admin.pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required|unique:pelanggans,no_telp|max:13',
            'email' => 'required|unique:pelanggans,email',
            'foto' => 'required|mimes:jpg,jpeg,png|max:2048',
            'no_rekening_air' => 'required',
            'alamat' => 'required'
        ],
        [
            'nama.required' => 'Nama wajib disi',
            'no_telp.required' => 'No telp wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'no_rekening_air.required' => 'No rekening air wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'foto.required' => 'Foto wajib diisi',
            'foto.mimes' => 'Jenis foto harus berformat jpg,jpeg,png'
        ]);

        
            $namaFile = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('galeri', $namaFile);
        // try {
            $nilai = Pelanggan::create([
                'nama' => $request->nama,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'foto' => $namaFile,
                'no_rekening_air' => $request->no_rekening_air,
                'alamat' => $request->alamat
            ]);
            
            $nilai->save();
            // dd($nilai);
            return redirect('menu-admin/pelanggan')->with('created', 'Data berhasil disimpan');
        // } catch (Exception $e) {
        //     return redirect('menu-admin/pelanggan')->with('error', 'Terjadi kesalahan! Mohon periksa kembali.');
        // }
        
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findorfail($id);

        return view('menu-admin.pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required|max:13',
            'email' => 'required',
            'foto' => 'mimes:jpg,jpeg,png|max:2048',
            'no_rekening_air' => 'required',
            'alamat' => 'required'
        ],
        [
            'nama.required' => 'Nama wajib diisi',
            'no_telp.required' => 'No telp wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'no_rekening_air.required' => 'No rekening air wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'foto.required' => 'Foto wajib diisi',
            'foto.mimes' => 'Jenis foto harus berformat jpg,jpeg,png'
        ]);

        $pelanggan = Pelanggan::find($id);

        if($request->file('foto') != ''){        
            $path = public_path().'/galeri/';

            //code for remove old file
            if($pelanggan->foto != ''  && $pelanggan->foto != null){
                $file_old = $path.$pelanggan->foto;
                unlink($file_old);
            }

            //upload new file
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);

            //for update in table
            $pelanggan->update([
                'nama' => $request->nama,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'foto' => $filename,
                'no_rekening_air' => $request->no_rekening_air,
                'alamat' => $request->alamat
            ]);
            // dd($pelanggan);
            return redirect('menu-admin/pelanggan')->with('updated', 'Data berhasil diubah!');
        }
        $pelanggan->update([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            // 'foto' => $filename,
            'no_rekening_air' => $request->no_rekening_air,
            'alamat' => $request->alamat
        ]);
        return redirect('menu-admin/pelanggan')->with('updated', 'Data berhasil diubah!');
    }

    public function show($id)
    {
        $pelanggan = Pelanggan::findorfail($id);

        return view('menu-admin.pelanggan.show', compact('pelanggan'));
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findorfail($id);
        File::delete("galeri/{$pelanggan->foto}");
        $pelanggan->delete();

        return redirect('menu-admin/pelanggan')->with('deleted', 'Data berhasil dihapus');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
?>

