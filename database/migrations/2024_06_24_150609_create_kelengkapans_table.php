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
        Schema::create('kelengkapans', function (Blueprint $table) {
            $table->id('id_analisis');
            $table->string('no_rm')->nullable();
            $table->string('id_formulir')->nullable();
            $table->string('hasil_catatan')->nullable();
            $table->string('hasil_akhir')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelengkapans');
    }
};
