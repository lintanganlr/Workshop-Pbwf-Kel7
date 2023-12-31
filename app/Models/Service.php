<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = "services";
    protected $fillable = ['nama_service','image', 'updated_at',
    'created_at'];

    // public function tenagaMedis()
    // {
    //     return $this->belongsTo(TenagaMedis::class, 'id_tenagamedis');
    // }
}

