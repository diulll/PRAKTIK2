<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up(): void
    {
        Schema::create('kota', function (Blueprint $table) {
            $table->id(); // kolom id auto increment
            $table->integer('propinsi_id'); // relasi ke tabel propinsi
            $table->string('nama_kota', 100);
            $table->timestamps(); // kolom created_at & updated_at
        });
    }

    /**
     * Batalkan migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('kota');
    }
};
