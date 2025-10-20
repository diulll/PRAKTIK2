<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('buku')->insert([
            ['id_penerbit' => 1, 'judul' => 'Pemrograman Web dengan Laravel', 'pengarang' => 'Andi Setiawan', 'tahun_terbit' => 2023, 'harga' => 85000],
            ['id_penerbit' => 2, 'judul' => 'Belajar PHP Modern', 'pengarang' => 'Rina Wati', 'tahun_terbit' => 2022, 'harga' => 75000],
            ['id_penerbit' => 3, 'judul' => 'Database MySQL untuk Pemula', 'pengarang' => 'Dedi Gunawan', 'tahun_terbit' => 2024, 'harga' => 90000],
        ]);
    }
}
