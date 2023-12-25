<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'password',
        'notelp', // Tambahkan no_telp ke atribut fillable
        'email',
        'alamat', // Tambahkan alamat ke atribut fillable
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Define a mutator for the 'password' attribute to automatically hash it.
     *
     * @param string $value
     */
    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = \Hash::make($password);
    // }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'id_user');
    }
    
}
