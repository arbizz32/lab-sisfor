<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftaran_praktikum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mahasiswa')->constrained('mahasiswa');
            $table->string('nama');
            $table->integer('nim');
            $table->integer('semester');
            $table->string('upload_pembayaran');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_praktikum');
    }
};