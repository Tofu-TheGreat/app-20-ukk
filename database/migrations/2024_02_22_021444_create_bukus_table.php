<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id('id_buku');
            $table->string('judul_buku', 100);
            $table->text('sinopsis_buku');
            $table->string('penulis_buku', 50);
            $table->unsignedBigInteger('stok_buku')->unsigned();
            $table->string('penerbit', 50);
            $table->year('tahun_terbit');
            $table->string('sampul_buku', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
