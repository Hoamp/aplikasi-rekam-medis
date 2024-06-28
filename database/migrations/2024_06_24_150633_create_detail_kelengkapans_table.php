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
        Schema::create('detail_kelengkapans', function (Blueprint $table) {
            $table->id('id_detail');
            $table->string('id_analisis')->nullable();
            $table->string('nama_review')->nullable();
            $table->string('item_review')->nullable();
            $table->string('hasil_item')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kelengkapans');
    }
};
