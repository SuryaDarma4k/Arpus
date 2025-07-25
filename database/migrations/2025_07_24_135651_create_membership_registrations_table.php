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
        Schema::create('membership_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->year('tahun');
            $table->unsignedInteger('laki_laki');
            $table->unsignedInteger('perempuan');
            $table->unsignedInteger('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_registrations');
    }
};
