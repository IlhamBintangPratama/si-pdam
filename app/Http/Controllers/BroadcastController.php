<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function pesan()
    {
        $pelanggan = Pelanggan::groupBy('no_telp')->get('no_telp');
        // dd($pelanggan->id_p)
        return view('menu-admin.broadcast.broadcast', compact('pelanggan'));
    }
    public function broadcastWhatsapp(Request $request)
    {
        $token = '3u1cu_RH+pn@qegbmD9S';
        $target = $request->no_telp;
        // $broadcast = implode('`, `',$target);

        // dd($target);
        $pesan = $request->pesan;

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.fonnte.com/send',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
        'target' => $target,
        'message' => $pesan, 
        // 'countryCode' => '62', //optional
        ),
        CURLOPT_HTTPHEADER => array(
            "Authorization: $token" //change TOKEN to your actual token
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return redirect('menu-admin/broadcast/pesan')->with('created', 'Broadcast berhasil dikirim!');
    }
}
