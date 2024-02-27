<?php

namespace App\Charts;

use App\Models\Kecamatan;
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
        $startDateFormatted = Carbon::parse($startDate)->startOfMonth();
        $endDateFormatted = Carbon::parse($endDate)->endOfMonth();

        if (!(empty($idKecamatan))) {
            $pengaduanDataKerusakan = Pengaduan::where('id_kecamatan', $idKecamatan)
                ->where('tema', 'Kerusakan')
                ->whereBetween('created_at', [$startDateFormatted, $endDateFormatted])
                ->count();

            $pengaduanDataOperasional = Pengaduan::where('id_kecamatan', $idKecamatan)
                ->where('tema', 'Operasional')
                ->whereBetween('created_at', [$startDateFormatted, $endDateFormatted])
                ->count();

            $pengaduanDataKualitasAir = Pengaduan::where('id_kecamatan', $idKecamatan)
                ->where('tema', 'Kualitas Air')
                ->whereBetween('created_at', [$startDateFormatted, $endDateFormatted])
                ->count();

            $kecamatan = Kecamatan::findOrFail($idKecamatan);

            return $this->chart->barChart()
                ->addData('Kerusakan', [$pengaduanDataKerusakan])
                ->addData('Operasional', [$pengaduanDataOperasional])
                ->addData('Kualitas Air', [$pengaduanDataKualitasAir])
                ->setXAxis([$kecamatan->nama_kecamatan]);
        } else {
            return $this->chart->barChart()
                ->addData('Pengaduan', [0])
                ->setXAxis(['No Kecamatan Selected']);
        }
    }
}
