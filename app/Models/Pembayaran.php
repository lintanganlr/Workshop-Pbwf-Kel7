<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{


    protected $table = 'pembayaran'; // Nama tabel yang sesuai dengan skema database

    protected $fillable = [
        'tgl_pembayaran',
        'total_pembayaran',
        'status_pembayaran',
    ];

    protected $dates = [
        'tgl_pembayaran',
        'created_at',
        'updated_at',
    ];

    // Tambahan jika diperlukan: relasi, akses, mutator, accessor, dll.

    // Contoh metode tambahan:
    public function getStatusPembayaranAttribute($value)
    {
        return ucfirst($value); // Mengembalikan status pembayaran dengan huruf kapital di awal
    }

}
