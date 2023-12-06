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
        Schema::create('identitassekolahs', function (Blueprint $table) {
            $table->id("id_identitassekolah");
            $table->integer('npsn');
            $table->string('nama_sekolah');
            $table->string('alamat_jalan');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('kepala_sekolah');
            $table->integer('nip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitassekolahs');
    }
};
