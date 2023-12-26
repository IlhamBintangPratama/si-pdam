<?php

namespace Database\Seeders;

use App\Models\Desa;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 8; $i++){

        // insert data ke table pegawai menggunakan Faker
        Desa::insert([
            'nama_desa' => $faker->randomElement(['Adisana', 'Bumiayu', 'Dukuhturi', 'Jatisawit', 'Kalierang', 'Kalilangkap', 'Kalinusu', 'Kalisumur']),
            'id_kecamatan' => 5,
        ]);

    }
    }
}
