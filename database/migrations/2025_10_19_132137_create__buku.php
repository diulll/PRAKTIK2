<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penerbit');
            $table->string('judul', 150);
            $table->string('pengarang', 100);
            $table->integer('tahun_terbit');
            $table->decimal('harga', 10, 2);
            $table->timestamps();

             
            $table->foreign('id_penerbit')
                  ->references('id')
                  ->on('penerbit')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
