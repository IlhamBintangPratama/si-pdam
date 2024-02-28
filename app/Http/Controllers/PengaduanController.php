<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Pengaduan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;
// use PDF;
use Carbon\Carbon;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $baru = $request->get('baru');
        $selesai = $request->get('selesai');
        $datefrom = $request->get('date_from');
        $dateto = $request->get('date_to');

        $pengaduan = Pengaduan::paginate();
        if ($search != "") {
            $pengaduan = Pengaduan::where('nama', 'LIKE', '%' . $search . '%')->paginate()->setPath('');
            $pagination = $pengaduan->appends(array(
                'search' => $request->get('search')
            ));
        }

        if ($baru != "") {
            $pengaduan = Pengaduan::where('status', 'LIKE', '%' . $baru . '%')->paginate()->setPath('');
            $pagination = $pengaduan->appends(array(
                'baru' => $request->get('baru')
            ));
        }
        if ($selesai != "") {
            $pengaduan = Pengaduan::where('status', 'LIKE', '%' . $selesai . '%')->paginate()->setPath('');
            $pagination = $pengaduan->appends(array(
                'selesai' => $request->get('selesai')
            ));
        }
        if ($datefrom != "" && $dateto != "") {
            $pengaduan = Pengaduan::orderBy('id', 'desc')->when(
                $datefrom && $dateto,
                function (Builder $builder) use ($datefrom, $dateto) {
                    $builder->whereBetween(
                        DB::raw('DATE(created_at)'),
                        [
                            $datefrom,
                            $dateto
                        ]
                    );
                }
            )->paginate();
        }
        // $profil = User::select('name','level')->where('level', '=', 1)->first();
        // dd($profil);
        return view('menu-admin.pengaduan.index', compact('pengaduan', 'datefrom', 'dateto'));
    }

    public function create()
    {
        return view('menu-admin.pengaduan.create');
    }

    public function laporan(Request $request)
    {

        // Validasi tanggal
        $startDate = $request->start_date ?? now()->format('Y-m-d');
        $endDate = $request->end_date ?? now()->format('Y-m-d');

        if ($startDate && $endDate && $endDate < $startDate) {

            return redirect()->route('rekap.report')->with('error', 'Tanggal Tidak Valid!');
        }

        $laporan = Kecamatan::with(['pengaduan' => function ($q) use ($request) {
            $startDate = $request->start_date;
            $endDate = $request->end_date;
            if ($startDate && $endDate) {
                return $q->whereBetween('created_at', [
                    $startDate, $endDate
                ]);
            }
            return $q->whereBetween('created_at', [
                Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
            ]);
        }])->get();

        return view('menu-admin.laporan.index', compact('laporan', 'startDate', 'endDate'));
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
    public function pesan($id)
    {
        $pengaduan = Pengaduan::findorfail($id);
        // dd($pengaduan->id_p)
        return view('menu-admin.pengaduan.pesan', compact('pengaduan'));
    }
    public function resWhatsapp(Request $request, $id)
    {
        $token = 'T3CStHawPm#MJuVjZy#A';
        $request->validate([
            'pesan' => 'required',
            'status' => 'required'

        ]);

        $target = $request->no_telp;
        $pesan = $request->pesan;

        $changestatus = Pengaduan::find($id);
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
        $changestatus->update([
            'status' => $request->status
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        return back()->with('created', 'Pesan berhasil dikirim!');
    }

    public function print($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pdf = PDF::loadView('menu-admin.pengaduan.cetak', ['pengaduan' => $pengaduan]);
        return $pdf->download('pengaduan.pdf');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required',
            'id_pelanggan' => 'required',
            'keluhan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|max:2048',
            // 'no_rekening_air' => 'required',
            'alamat' => 'required'
        ]);

        $pengaduan = Pengaduan::find($id);

        if ($request->file('foto') != '') {
            $path = public_path() . '/galeri/pengaduan/';

            //code for remove old file
            if ($pengaduan->foto != ''  && $pengaduan->foto != null) {
                $file_old = $path . $pengaduan->foto;
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

    public function laporan_pdf(Request $request, $id)
    {
        $kecamatan = Kecamatan::find($id);

        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $startDateFormatted = Carbon::parse($startDate)->startOfMonth();
        $endDateFormatted = Carbon::parse($endDate)->endOfMonth();

        $pengaduan = Pengaduan::where('id_kecamatan', $id)
            ->whereBetween('created_at', [$startDateFormatted, $endDateFormatted])
            ->get();

        // dd($pengaduan);



        $pdf = Pdf::loadView('pdf.pengaduan_laporan', compact('kecamatan', 'startDate', 'endDate', 'pengaduan'));
        $pdf->setPaper('A4');
        return $pdf->stream();
    }
}
