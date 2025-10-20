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
        Schema::create('propinsi', function (Blueprint $table) {
            $table->id(); // kolom id auto increment
            $table->string('nama_propinsi', 100);
            $table->timestamps(); // membuat kolom created_at & updated_at otomatis
        });
    }

    /**
     * Batalkan migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('propinsi');
    }
};
