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
        Schema::create('tenaga_medis', function (Blueprint $table) {
            $table->id();
            $table->boolean('jenis_tenaga_medis')->nullable(false);
            $table->string('nama_medis', 30)->nullable(false);
            $table->boolean('jk_medis')->nullable(false);
            $table->string('notelp_medis', 15)->nullable(false);
            $table->text('alamat_medis')->nullable(false);
            $table->text('spesialisasi_medis')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenaga_medis');
    }
};
