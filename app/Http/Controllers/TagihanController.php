<?php 
namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $tagihan = Tagihan::paginate(8);
        if($keyword != ""){
        $tagihan = Tagihan::where ('nama', 'LIKE', '%' . $keyword . '%' )->paginate (8)->setPath ( '' );
        $pagination = $tagihan->appends ( array (
            'keyword' => $request->get('keyword') 
            ) );
        }
        // $profil = User::select('name','level')->where('level', '=', 1)->first();
        // dd($profil);
        return view('menu-admin.tagihan.index', compact('tagihan'));
    }

    public function create()
    {
        return view('menu-admin.tagihan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_pelanggan' => 'required',
            'jumlah_tagihan' => 'required',
            'alamat' => 'required'
        ]);

        
            // $namaFile = $request->file('foto')->getClientOriginalName();
            // $request->file('foto')->move('galeri/tagihan', $namaFile);
        // try {
            $nilai = Tagihan::create([
                'nama' => $request->nama,
                'no_pelanggan' => $request->no_pelanggan,
                'jumlah_tagihan' => $request->jumlah_tagihan,
                'alamat' => $request->alamat
            ]);
            
            $nilai->save();
            // dd($nilai);
            return redirect('menu-admin/tagihan')->with('created', 'Data berhasil disimpan');
        // } catch (Exception $e) {
        //     return redirect('menu-admin/tagihan')->with('error', 'Terjadi kesalahan! Mohon periksa kembali.');
        // }
        
    }

    public function edit($id)
    {
        $tagihan = Tagihan::findorfail($id);
        // dd($tagihan->id_p)
        return view('menu-admin.tagihan.edit', compact('tagihan'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'nama' => 'required',
            'no_pelanggan' => 'required',
            'jumlah_tagihan' => 'required',
            'alamat' => 'required'
        ]);

        $tagihan = Tagihan::find($id);

            //for update in table
            $tagihan->update([
                'nama' => $request->nama,
                'no_pelanggan' => $request->no_pelanggan,
                'jumlah_tagihan' => $request->jumlah_tagihan,
                'alamat' => $request->alamat
            ]);
            // dd($tagihan);
            return redirect('menu-admin/tagihan')->with('updated', 'Data berhasil diubah!');
    }

    public function show($id)
    {
        $tagihan = Tagihan::findorfail($id);

        return view('menu-admin.tagihan.show', compact('tagihan'));
    }

    public function destroy($id)
    {
        $tagihan = Tagihan::findorfail($id);
        // File::delete("galeri/tagihan/{$tagihan->foto}");
        $tagihan->delete();

        return redirect('menu-admin/tagihan')->with('deleted', 'Data berhasil dihapus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
?>

