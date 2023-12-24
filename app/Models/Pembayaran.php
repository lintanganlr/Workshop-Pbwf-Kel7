<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{


    protected $table = 'pembayaran'; // Nama tabel yang sesuai dengan skema database
    protected $primaryKey = 'id'; // Pastikan primary key diatur sebagai 'id'

    protected $keyType = 'string'; // Tentukan tipe data untuk kunci utama sebagai string

    public $incrementing = false; 
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) \Illuminate\Support\Str::uuid();
            }
        });
    }

    protected $fillable = [
        'id_tenagamedis' ,
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
    public function tenagamedis()
    {
        return $this->belongsTo(TenagaMedis::class, 'id_tenagamedis');
    }
    // Contoh metode tambahan:
    public function getStatusPembayaranAttribute($value)
    {
        return ucfirst($value); // Mengembalikan status pembayaran dengan huruf kapital di awal
    }

}
