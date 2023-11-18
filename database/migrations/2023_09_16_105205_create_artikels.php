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
            $table->id('id');
            $table->unsignedBigInteger('id_roles');
            $table->foreign('id_roles')->references('id')->on('roles');
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

    public function up()
    {
    Schema::table('artikels', function (Blueprint $table) {
        $table->string('image')->nullable();
    });
    }

    public function down()
    {
        Schema::dropIfExists('artikels');
        Schema::table('artikels', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
