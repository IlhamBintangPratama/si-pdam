<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 100; $i++) {
            Pengaduan::create([
                'id_pelanggan' => 79,
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'id_kecamatan' => random_int(1, 5),
                'id_desa' => random_int(1, 40),
                'foto' => 'team1.png',
                'keluhan' => $faker->sentence,
                'tema' => $faker->sentence,
                'status' => $faker->boolean,
                'created_at' => $faker->dateTime
            ]);
        }
    }
}
