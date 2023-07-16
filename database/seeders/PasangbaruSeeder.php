<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use App\Models\Pasangbaru;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PasangbaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pelanggan::create([
        //     'nama' => 'User',
        //     'no_telp' => '082387787874',
        //     'password' => Hash::make(md5('123123')),
        //     'email' => 'testing@gmail.com',
        //     'no_rekening_air' => '100897322',
        //     'alamat' => 'jl.testing',
        //     'username' => 'user123',
        // ]);

        Pasangbaru::create([
            'persyaratan' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt nobis dicta possimus?',
            'harga_pasang'  => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt nobis dicta possimus?'
        ]);
    }
}
