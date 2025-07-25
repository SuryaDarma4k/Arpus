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
        Schema::create('direct_visitors', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->year('tahun');
            $table->unsignedInteger('titik_layanan');
            $table->unsignedInteger('anggota_baru');
            $table->unsignedInteger('pengunjung');
            $table->unsignedInteger('buku_yang_dibaca');
            $table->unsignedInteger('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direct_visitors');
    }
};
