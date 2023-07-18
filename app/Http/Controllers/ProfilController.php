<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $profil = Profil::select('id','profil','facebook','instagram','email','no_telp','alamat','visi','misi')->first();
        // $profil = Profil::findorfail($id);

        return view('menu-admin.profil.index', compact('profil'));
    }
        // $profil = User::select('name','level')->where('level', '=', 1)->first();
        // dd($profil);
        
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $profil = Profil::findorfail($id);
        $textareaProfil = trim($profil->profil);

        return view('menu-admin.profil.edit', compact('profil', 'textareaProfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'profil' => 'required',
            'no_telp' => 'required|max:13',
            'email' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'alamat' => 'required',
            'visi' => 'required',
            'misi' => 'required'
        ],
        [
            'profil.required' => 'Profil wajib diisi',
            'no_telp.required' => 'No telp wajib diisi',
            'email.required' => 'Email wajib diisi',
            'facebook.required' => 'Facebook wajib diisi',
            'instagram.required' => 'Instagram wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'visi.required' => 'Visi wajib diisi',
            'misi.required' => 'Misi wajib diisi'
        ]);

        $profil = Profil::find($id);

        
            $profil->update([
                'profil' => $request->profil,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'alamat' => $request->alamat,
                'visi' => $request->visi,
                'misi' => $request->misi
            ]);
            // dd($profil);
            return redirect('menu-admin/profil')->with('updated', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
