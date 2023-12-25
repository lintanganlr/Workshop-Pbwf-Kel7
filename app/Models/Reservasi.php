<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'reservasi';

    protected $fillable = [
        'tgl_reservasi',
        'status_reservasi',
        'tgl_tindakan',
    ];

    protected $casts = [
        'status_reservasi' => 'boolean',
        'tgl_reservasi' => 'date',
        'tgl_tindakan' => 'date',
    ];
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_reservasi', 'id');
    }

    public function tenagamedis()
    {
        return $this->belongsTo(TenagaMedis::class, 'id_tenagamedis');
    }
    // Jika ada relasi atau method lain yang perlu ditambahkan, Anda dapat menambahkannya di sini.
}
