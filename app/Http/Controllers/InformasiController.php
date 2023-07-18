<?php 
namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $informasi = Informasi::paginate();
        if($search != ""){
        $informasi = Informasi::where ('judul', 'LIKE', '%' . $search . '%' )->paginate ()->setPath ( '' );
        $pagination = $informasi->appends ( array (
            'search' => $request->get('search') 
            ) );
        }
        // $profil = User::select('name','level')->where('level', '=', 1)->first();
        // dd($profil);
        return view('menu-admin.informasi.index', compact('informasi'));
    }

    public function create()
    {
        return view('menu-admin.informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi_informasi' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|max:2048'
        ],
        [
            'judul.required' => 'Judul wajib diisi',
            'isi_informasi.required' => 'Isi informasi wajib diisi',
            'foto.required' => 'Foto wajib diisi',
            'foto.mimes' => 'Jenis foto harus berformat jpg,jpeg,png'
        ]);

        
            $namaFile = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('galeri/informasi', $namaFile);
        // try {
            $nilai = Informasi::create([
                'judul' => $request->judul,
                'isi_informasi' => $request->isi_informasi,
                'foto' => $namaFile
            ]);
            
            $nilai->save();
            // dd($nilai);
            return redirect('menu-admin/informasi')->with('created', 'Data berhasil disimpan');
        // } catch (Exception $e) {
        //     return redirect('menu-admin/informasi')->with('error', 'Terjadi kesalahan! Mohon periksa kembali.');
        // }
        
    }

    public function edit($id)
    {
        $informasi = Informasi::findorfail($id);
        // dd($informasi->id_p)
        return view('menu-admin.informasi.edit', compact('informasi'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'judul' => 'required',
            'isi_informasi' => 'required',
            'foto' => 'mimes:jpg,jpeg,png|max:2048'
        ],
        [
            'judul.required' => 'Judul wajib diisi',
            'isi_informasi.required' => 'Isi informasi wajib diisi',
            'foto.required' => 'Foto wajib diisi',
            'foto.mimes' => 'Jenis foto harus berformat jpg,jpeg,png'
        ]);

        $informasi = Informasi::find($id);

        if($request->file('foto') != ''){        
            $path = public_path().'/galeri/informasi/';

            //code for remove old file
            if($informasi->foto != ''  && $informasi->foto != null){
                $file_old = $path.$informasi->foto;
                unlink($file_old);
            }

            //upload new file
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);

            //for update in table
            $informasi->update([
                'judul' => $request->judul,
                'isi_informasi' => $request->isi_informasi,
                'foto' => $filename
            ]);
            // dd($informasi);
            return redirect('menu-admin/informasi')->with('updated', 'Data berhasil diubah!');
        }
        $informasi->update([
            'judul' => $request->judul,
            'isi_informasi' => $request->isi_informasi
        ]);
        // dd($informasi);
        return redirect('menu-admin/informasi')->with('updated', 'Data berhasil diubah!');
    }

    public function show($id)
    {
        $informasi = Informasi::findorfail($id);

        return view('menu-admin.informasi.show', compact('informasi'));
    }

    public function destroy($id)
    {
        $informasi = Informasi::findorfail($id);
        File::delete("galeri/informasi/{$informasi->foto}");
        $informasi->delete();

        return redirect('menu-admin/informasi')->with('deleted', 'Data berhasil dihapus');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
?>

