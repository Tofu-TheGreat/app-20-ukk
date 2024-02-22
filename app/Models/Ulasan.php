<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ulasan';
    protected $table = 'ulasan';
    protected $fillable = [
        'id_user',
        'id_buku',
        'ulasan',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
