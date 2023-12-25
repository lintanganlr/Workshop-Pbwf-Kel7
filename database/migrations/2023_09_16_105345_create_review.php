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
        Schema::create('review', function (Blueprint $table) {
            $table->id('id_review')->increments();
            // $table->unsignedBigInteger('id_users');
            // $table->foreign('id_users')->references('id')->on('users');
            $table->string('id_pembayaran'); // Sesuaikan tipe data dengan yang direferensikan
            $table->foreign('id_pembayaran')->references('id')->on('pembayaran');
            $table->enum('rating', ['Kurang Memuaskan', 'Cukup', 'Bagus', 'Sangat Bagus', 'Luar Biasa'])->default('Cukup');
            $table->text('ulasan');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
