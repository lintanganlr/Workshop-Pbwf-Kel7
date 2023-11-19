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
        Schema::create('tenagamedis', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_roles');
            $table->foreign('id_roles')->references('id')->on('roles');
            $table->string('nama_medis', 30);
            $table->string('spesialisasi_medis', 30);
            $table->string('image');
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
