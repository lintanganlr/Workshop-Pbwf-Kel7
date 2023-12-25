<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "review";
    protected $fillable = [
        'id_user',
        'id_pembayaran',
        'rating',
        'ulasan',
    ];

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'id_pembayaran');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
