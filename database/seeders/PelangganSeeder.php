<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $array = ['17','18','19','20','21','22','23','24'];
        for($i = 1; $i <= 13; $i++){
        $no_rek = '2023122'.sprintf('%03d', $i);
        // insert data ke table pegawai menggunakan Faker
        Pelanggan::insert([
            'nama' => $faker->name(),
            'email' => $faker->email(),
            'no_rekening_air' => $no_rek,
            'id_desa' => $array[array_rand($array, 1)],
            'id_kecamatan' => 3
        ]);

    }
    }
}
