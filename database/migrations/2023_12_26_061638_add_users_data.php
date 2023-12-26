<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddUsersData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            [
                'name' => 'Lintang',
                'password' => Hash::make('123456'),
                'notelp' => '082232803001',
                'email' => 'lintangan.lr@admin.com',
                'alamat' => 'pontianak',
            ],
            [
                'name' => 'Indah',
                'password' => Hash::make('indah'),
                'notelp' => '081234567890',
                'email' => 'indah@admin.com',
                'alamat' => 'sidoarjo',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
