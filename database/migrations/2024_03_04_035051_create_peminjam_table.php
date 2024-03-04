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
        Schema::create('peminjam', function (Blueprint $table) {
            $table->id('id_peminjam');
            $table->string('nama');
            $table->string('nomor_identifikasi');
            $table->string('alamat');
            $table->integer('nomor_telepon');
            $table->date('tanggal_peminjam');
            $table->date('tanggal_pengembalian');
            $table->boolean('status_peminjaman');
            $table->integer('id_buku_peminjam');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjam');
    }
};
