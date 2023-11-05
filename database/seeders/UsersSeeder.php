<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('users')->insert([
        [
            'name' => 'Lintang',
            'username' => 'lintanganlr',
            'password' => Hash::make('123456'),
            'notelp' => '082232803001',
            'email' => 'lintangan.lr@admin.com',
            'alamat' => 'pontianak',
        ],
        [
            'name' => 'Indah',
            'username' => 'indaah',
            'password' => Hash::make('indah'),
            'notelp' => '081234567890',
            'email' => 'indah@admin.com',
            'alamat' => 'sidoarjo',
        ],
    ]);
}


}
