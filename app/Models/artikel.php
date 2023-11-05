<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    // Kolom yang dapat diisi (fillable) secara mass assignment
    protected $fillable = [
        'tgl_artikel',
        'judul_artikel',
        'deskripsi',
    ];

    // many-to-one dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
