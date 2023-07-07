<?php 
namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $pengaduan = Pengaduan::paginate(8);
        if($keyword != ""){
        $pengaduan = Pengaduan::where ('nama', 'LIKE', '%' . $keyword . '%' )->paginate (8)->setPath ( '' );
        $pagination = $pengaduan->appends ( array (
            'keyword' => $request->get('keyword') 
            ) );
        }
        // $profil = User::select('name','level')->where('level', '=', 1)->first();
        // dd($profil);
        return view('menu-admin.pengaduan.index', compact('pengaduan'));
    }

    public function create()
    {
        return view('menu-admin.pengaduan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'id_pelanggan' => 'required',
            'keluhan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|max:2048',
            // 'no_rekening_air' => 'required',
            'alamat' => 'required'
        ]);

        
            $namaFile = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('galeri/pengaduan', $namaFile);
        // try {
            $nilai = Pengaduan::create([
                'nama' => $request->nama,
                'id_pelanggan' => $request->id_pelanggan,
                'keluhan' => $request->keluhan,
                'foto' => $namaFile,
                // 'no_rekening_air' => $request->no_rekening_air,
                'alamat' => $request->alamat
            ]);
            
            $nilai->save();
            // dd($nilai);
            return redirect('menu-admin/pengaduan')->with('created', 'Data berhasil disimpan');
        // } catch (Exception $e) {
        //     return redirect('menu-admin/pengaduan')->with('error', 'Terjadi kesalahan! Mohon periksa kembali.');
        // }
        
    }

    public function edit($id)
    {
        $pengaduan = Pengaduan::findorfail($id);
        // dd($pengaduan->id_p)
        return view('menu-admin.pengaduan.edit', compact('pengaduan'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'nama' => 'required',
            'id_pelanggan' => 'required',
            'keluhan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|max:2048',
            // 'no_rekening_air' => 'required',
            'alamat' => 'required'
        ]);

        $pengaduan = Pengaduan::find($id);

        if($request->file('foto') != ''){        
            $path = public_path().'/galeri/pengaduan/';

            //code for remove old file
            if($pengaduan->foto != ''  && $pengaduan->foto != null){
                $file_old = $path.$pengaduan->foto;
                unlink($file_old);
            }

            //upload new file
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);

            //for update in table
            $pengaduan->update([
                'nama' => $request->nama,
                'id_pelanggan' => $request->id_pelanggan,
                'keluhan' => $request->keluhan,
                'foto' => $filename,
                // 'no_rekening_air' => $request->no_rekening_air,
                'alamat' => $request->alamat
            ]);
            // dd($pengaduan);
            return redirect('menu-admin/pengaduan')->with('updated', 'Data berhasil diubah!');
        }
        return redirect('menu-admin/pengaduan')->with('error', 'Data gagal diubah!');
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::findorfail($id);

        return view('menu-admin.pengaduan.show', compact('pengaduan'));
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::findorfail($id);
        File::delete("galeri/pengaduan/{$pengaduan->foto}");
        $pengaduan->delete();

        return redirect('menu-admin/pengaduan')->with('deleted', 'Data berhasil dihapus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
?>

