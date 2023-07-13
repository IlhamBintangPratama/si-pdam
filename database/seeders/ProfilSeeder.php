<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profil::create([
            'facebook' => 'https://www.facebook.com/pdambrebes/',
            'instagram' => 'https://www.instagram.com/tirtabaribis/',
            'no_telp' => '085713134141',
            'email' => 'tirtabaribis.brebes@gmail.com',
            'alamat' => 'Jalan Taman Siswa No 3, Brebes, Jawa Tengah, Indonesia',
            'visi' => 'Menjadi Perumda Air Minum yang Unggul, Modern, dan Berwawasan Lingkungan',
            'misi' => '1. Memberikan pelayanan air yang unggul kepada konsumen secara kualitas, kuantitas, kontinuitas serta keterjangkauan
                        2. Ikut serta aktif dalam pembangunan daerah dalam penyediaan air bersih.'
        ]);
    }
}
