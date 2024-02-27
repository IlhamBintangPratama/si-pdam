<?php

namespace App\Http\Controllers;

use App\Charts\PengaduanChart;
use App\Models\Kecamatan;
use App\Models\Pelanggan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $data;

    public function __construct()
    {
        $this->data['title'] = 'Dashboard';
    }
    //
    public function index(PengaduanChart $pengaduanChart, Request $request)
    {
        $this->data['pelanggan_count'] = Pelanggan::count();
        $this->data['pengaduan_count'] = Pengaduan::count();

        $this->data['kecamatan'] = Kecamatan::all();

        $this->data['pengaduan_chart'] = $pengaduanChart->build($request->kecamatan, $request->start_date, $request->end_date);

        return view('dashboard', $this->data);
    }
}
