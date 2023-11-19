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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id('id_artikel');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id')->references('id_user')->on('users')->onDelete('cascade');
            $table->date('tgl_artikel');
            $table->string('judul_artikel', 100);
            $table->string('image');
            $table->string('deskripsi', 2000);
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
