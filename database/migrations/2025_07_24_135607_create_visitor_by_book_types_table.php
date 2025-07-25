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
        Schema::create('visitor_by_book_types', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->year('tahun');
            $table->unsignedInteger('000');
            $table->unsignedInteger('100');
            $table->unsignedInteger('200');
            $table->unsignedInteger('300');
            $table->unsignedInteger('400');
            $table->unsignedInteger('500');
            $table->unsignedInteger('600');
            $table->unsignedInteger('700');
            $table->unsignedInteger('800');
            $table->unsignedInteger('900');
            $table->unsignedInteger('fiksi');
            $table->unsignedInteger('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_by_book_types');
    }
};
