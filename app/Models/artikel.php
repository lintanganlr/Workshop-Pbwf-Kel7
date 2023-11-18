<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';

    // Kolom yang dapat diisi (fillable) secara mass assignment
    protected $fillable = [
        'id_roles',
        'tgl_artikel',
        'judul_artikel',
        'image',
        'deskripsi',
    ];

    // many-to-one dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
