<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddRolesData extends Migration
{
    public function up()
    {

        DB::table('roles')->insert([
            ['id' => 1, 'nama_role' => 'admin'],
            ['id' => 2, 'nama_role' => 'dokter'],
            ['id' => 3, 'nama_role' => 'perawat'],

        ]);
    }

    public function down()
    {
      //iki rollback
        // DB::table('roles')->truncate();
    }
}
