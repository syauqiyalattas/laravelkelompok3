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
            $table->string('judul');
            $table->string('ISBN');
            $table->string('penulis');
            $table->integer('tahun_terbit'); 
            $table->string('penerbit');
            $table->string('kategori');
            $table->text('sinopsis');
            $table->integer('jumlah_stok');
            $table->decimal('harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
