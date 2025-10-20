<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerbitTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('penerbit')->insert([
            ['nama_penerbit' => 'Gramedia', 'alamat' => 'Jl. Palmerah Barat No.22', 'kota' => 'Jakarta'],
            ['nama_penerbit' => 'Erlangga', 'alamat' => 'Jl. H. Baping Raya No.100', 'kota' => 'Jakarta'],
            ['nama_penerbit' => 'Deepublish', 'alamat' => 'Jl. Kaliurang KM 5', 'kota' => 'Yogyakarta']
        ]);
    }
}
