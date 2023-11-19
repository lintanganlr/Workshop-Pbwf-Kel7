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
}

