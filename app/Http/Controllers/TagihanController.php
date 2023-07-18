<?php 
namespace App\Http\Controllers;

use App\Models\Pelanggan;
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
        $search = $request->get('search');
        $tagihan = Tagihan::paginate();
        if($search != ""){
        $tagihan = Tagihan::where ('nama', 'LIKE', '%' . $search . '%' )->paginate ()->setPath ( '' );
        $pagination = $tagihan->appends ( array (
            'search' => $request->get('search') 
            ) );
        }
        // $profil = User::select('name','level')->where('level', '=', 1)->first();
        // dd($profil);
        return view('menu-admin.tagihan.index', compact('tagihan'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::groupBy('no_rekening_air')->get('no_rekening_air');
        return view('menu-admin.tagihan.create', compact('pelanggan'));
    }

    function listdata($no_rekening_air, Request $request){

        $pelanggan= new Pelanggan();
        $pelanggan = $pelanggan->select('no_rekening_air','nama','alamat')
                        ->where('no_rekening_air','=',$no_rekening_air);
        
        return response()->json($pelanggan->get());
        // dd($pelanggan);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_rekening_air' => 'required|unique:tagihans',
            'jumlah_tagihan' => 'required',
            'alamat' => 'required'
        ],
        [
            'profil.required' => 'Profil wajib diisi',
            'no_rekening_air.required' => 'No rekening air wajib diisi',
            'no_rekening_air.unique' => 'No rekening air sudah terdaftar',
            'jumlah_tagihan.required' => 'Jumlah tagihan wajib diisi',
            'alamat.required' => 'Alamat wajib diisi'
        ]);

        
            // $namaFile = $request->file('foto')->getClientOriginalName();
            // $request->file('foto')->move('galeri/tagihan', $namaFile);
        // try {
            $nilai = Tagihan::create([
                'nama' => $request->nama,
                'no_rekening_air' => $request->no_rekening_air,
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
        $pelanggan = Pelanggan::groupBy('no_rekening_air')->get('no_rekening_air');
        return view('menu-admin.tagihan.edit', compact('tagihan','pelanggan'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'nama' => 'required',
            'no_rekening_air' => 'required',
            'jumlah_tagihan' => 'required',
            'alamat' => 'required'
        ],
        [
            'profil.required' => 'Profil wajib diisi',
            'no_rekening_air.required' => 'No rekening air wajib diisi',
            'no_rekening_air.unique' => 'No rekening air sudah terdaftar',
            'jumlah_tagihan.required' => 'Jumlah tagihan wajib diisi',
            'alamat.required' => 'Alamat wajib diisi'
        ]);

        $tagihan = Tagihan::find($id);

            //for update in table
            $tagihan->update([
                'nama' => $request->nama,
                'no_rekening_air' => $request->no_rekening_air,
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

