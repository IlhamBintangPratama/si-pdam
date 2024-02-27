<?php

namespace App\Charts;

use App\Models\Pengaduan;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class PengaduanChart
{
    protected $chart;
    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }
    public function build($idKecamatan, $startDate, $endDate)
    {
        // Ubah format tanggal ke format yang sesuai untuk database
        $startDateFormatted = Carbon::parse($startDate)->startOfDay();
        $endDateFormatted = Carbon::parse($endDate)->endOfDay();

        // Query untuk mengambil jumlah pengaduan berdasarkan id_kecamatan dan rentang tanggal
        $pengaduanData = Pengaduan::where('id_kecamatan', $idKecamatan)
            ->whereBetween('created_at', [$startDateFormatted, $endDateFormatted])
            ->get();

        // Jika tidak ada data pengaduan, kembalikan array kosong
        if ($pengaduanData->isEmpty()) {
            return $this->chart->lineChart()
                ->addData('Pengaduan', [0, 0, 0, 0, 0, 0]) // Data dummy
                ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
        }

        // Mengonversi data pengaduan ke format yang sesuai untuk chart
        $bulan = [];
        $jumlahPengaduan = [];

        foreach ($pengaduanData as $data) {
            $bulan[] = $data->created_at->format('F'); // Format nama bulan
            $jumlahPengaduan[] = 1; // Satu pengaduan untuk setiap entri
        }

        // Membuat chart dengan data pengaduan
        return $this->chart->lineChart()
            ->addData('Pengaduan', $jumlahPengaduan)
            ->setXAxis(array_unique($bulan)); // Menghilangkan bulan yang duplikat
    }
}
