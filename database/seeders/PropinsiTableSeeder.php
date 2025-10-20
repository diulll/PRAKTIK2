<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropinsiTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('propinsi')->insert([
            ['nama_propinsi' => 'Daerah Istimewa Yogyakarta'],
            ['nama_propinsi' => 'Jawa Tengah'],
            ['nama_propinsi' => 'Jawa Timur'],
            ['nama_propinsi' => 'Jawa Barat'],
        ]);
    }
}
