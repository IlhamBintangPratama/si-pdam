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
        $startDateFormatted = Carbon::parse($startDate)->startOfDay();
        $endDateFormatted = Carbon::parse($endDate)->endOfDay();

        $pengaduanData = Pengaduan::where('id_kecamatan', $idKecamatan)
            ->whereBetween('created_at', [$startDateFormatted, $endDateFormatted])
            ->get();

        if ($pengaduanData->isEmpty()) {
            return $this->chart->lineChart()
                ->addData('Pengaduan', [0, 0, 0, 0, 0, 0])
                ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
        }

        $bulan = [];
        $jumlahPengaduan = [];

        foreach ($pengaduanData as $data) {
            $bulan[] = $data->created_at->format('F');
            $jumlahPengaduan[] = 1;
        }

        return $this->chart->lineChart()
            ->addData('Pengaduan', $jumlahPengaduan)
            ->setXAxis(array_unique($bulan));
    }
}
