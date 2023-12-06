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
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id("id_kandidat");
            $table->integer("nisn");
            $table->integer("no");
            $table->string("nama");
            $table->string("foto");
            $table->integer("dipilih")->default(0);
            $table->string("nama_panggilan");
            $table->string("visi_misi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidats');
    }
};
