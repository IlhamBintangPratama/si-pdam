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
    

    public function create()
    {
        return view('menu-admin.pasang_baru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'persyaratan' => 'required',
            'harga_pasang' => 'required'
            
        ]);

        // try {
            $nilai = Pasangbaru::create([
                'persyaratan' => $request->persyaratan,
                'harga_pasang' => $request->harga_pasang
            ]);
            
            $nilai->save();
            // dd($nilai);
            return redirect('menu-admin/pasangbaru/create')->with('created', 'Data berhasil dipublish');
        // } catch (Exception $e) {
        //     return redirect('menu-admin/pelanggan')->with('error', 'Terjadi kesalahan! Mohon periksa kembali.');
        // }
        
    }
}