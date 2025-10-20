<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penerbit', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penerbit', 100);
            $table->string('alamat', 150)->nullable();
            $table->string('kota', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penerbit');
    }
};
