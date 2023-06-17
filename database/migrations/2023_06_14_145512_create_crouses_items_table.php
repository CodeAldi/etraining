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
        Schema::create('courses_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('courses');
            $table->string('judul');
            $table->longText('isi');
            $table->string('link_zoom');
            $table->string('link_video');
            $table->string('link_gambar');
            $table->string('link_dokumen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_items');
    }
};
