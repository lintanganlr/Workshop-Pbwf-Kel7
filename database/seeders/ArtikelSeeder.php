<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artikels')->insert([
            [
                'id' => '1',
                'id_roles' => '2',
                'tgl_artikel' => '2023-11-12',
                'judul_artikel' => 'diabetes',
                'image' => 'nullable',
                'deskripsi' => 'tyf',
            ],
            [
                'id' => '2',
                'id_roles' => '1',
                'tgl_artikel' => '2023-11-12',
                'judul_artikel' => 'alwan',
                'image' => 'nullable',
                'deskripsi' => 'tyf',
            ],
        ]);
    }
}
