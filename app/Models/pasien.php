<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pasien',
        'no_telp_pasien',
        'email_pasien',
        'alamat_pasien',
        'jk_pasien',
    ];
}
