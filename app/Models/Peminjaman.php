<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $primaryKey = "id_peminjaman";
    protected $table = "peminjaman";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function detail_peminjaman(){
        return $this->hasMany(DetailPeminjaman::class, 'id_peminjaman');
    }
}
