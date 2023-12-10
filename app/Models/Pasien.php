<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = [
        'nama_pasien', 'no_telp_pasien', 'email_pasien', 'alamat_pasien', 'jk_pasien'
    ];

    public static $rules = [
        'nama_pasien' => 'required',
        'no_telp_pasien' => 'required',
        'email_pasien' => 'required|email',
        'alamat_pasien' => 'required',
        'jk_pasien' => 'required',
    ];

}
