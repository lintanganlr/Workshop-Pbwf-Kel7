<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $fillable =['updated_at',
    'created_at','nama_role'];


    // public function artikels()
    // {
    //     return $this->hasMany(uploadart::class);
    // }


}
