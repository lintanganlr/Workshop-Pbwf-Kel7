<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaMedis extends Model
{
    use HasFactory;
    protected $table = "tenagamedis";
    protected $fillable = ['id_roles','nama_medis','spesialisasi_medis','image', 'updated_at',
    'created_at'];

    public function roles()
    {
        return $this->hasOne(Roles::class, 'id', 'id_roles');
    }

    public static function simpanDokter($data)
    {
        // Lakukan proses penyimpanan data untuk dokter di sini
        // Contoh:
        self::create([
            'id_roles' => $data['id_roles'],
            'nama_medis' => $data['nama_medis'],
            'spesialisasi_medis' => $data['spesialisasi_medis'],
            'image' => $data['image'],
            // ...tambahkan field lain jika ada
        ]);
    }

    public static function simpanPerawat($data)
    {
        // Lakukan proses penyimpanan data untuk perawat di sini
        // Contoh:
        self::create([
            'id_roles' => $data['id_roles'],
            'nama_medis' => $data['nama_medis'],
            'spesialisasi_medis' => $data['spesialisasi_medis'],
            'image' => $data['image'],
            // ...tambahkan field lain jika ada
        ]);
    }

    // protected $table = 'tenagamedis'; // Assuming your table name is 'tenagamedis'

    // Define the relationship between TenagaMedis and Pembayaran
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_tenagamedis', 'id');
    }

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'id_tenagamedis', 'id');
    }


}

