<?php 
namespace App\Http\Controllers;

use App\Models\Pasangbaru;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PasangbaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function edit($id)
    {
        $pasang_baru = Pasangbaru::findorfail($id);
        // dd($pasang_baru->id_p)
        return view('menu-admin.pasang_baru.edit', compact('pasang_baru'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'persyaratan' => 'required',
            'harga_pasang' => 'required'
        ],
        [
            'persyaratan.required' => 'Persyaratan wajib diisi',
            'harga_pasang.required' => 'Keterangan harga pasang wajib diisi'
        ]);

        $pasang_baru = Pasangbaru::find($id);

        
            $pasang_baru->update([
                'persyaratan' => $request->persyaratan,
                'harga_pasang' => $request->harga_pasang
            ]);
            // dd($pasang_baru);
            return view('menu-admin.pasang_baru.edit',compact('pasang_baru'))->with('updated', 'Data berhasil dipublish!')->with('updated', 'Data berhasil dipublish!');
    }
}