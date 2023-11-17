<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadArt extends Model
{
    use HasFactory;
    protected $table = "artikels";
    protected $fillable = ['id_roles','tgl_artikel','judul_artikel','image','deskripsi', 'updated_at',
    'created_at'];

    // public function roles(){
    //     return $this->belongsTo(Roles::class);
    // }

    public function roles()
    {
        return $this->hasOne(Roles::class, 'id', 'id_roles');
    }
}

