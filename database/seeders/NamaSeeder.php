<?php

namespace Database\Seeders;

use App\Models\NamaMasjid;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NamaMasjid::create([
            'nama_masjid' => 'Masjid Al-Muhajirin',
            'alamat_masjid' => 'Jl. Raya Kedungwaru, Kec. Karangploso, Kab. Malang, Jawa Timur, Indonesia',
            'no_telp' => '0813-1234-5678',
        ]);
    }
}