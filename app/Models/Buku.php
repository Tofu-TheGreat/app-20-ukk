<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $primaryKey = "id_buku";
    protected $table = "buku";
    protected $guarded = [];

    public function kategori_buku(){
        return $this->hasMany(KategoriBuku::class, 'id_buku');
    }
    public function koleksi_buku(){
        return $this->hasMany(KoleksiBuku::class, 'id_buku');
    }
    public function detail_peminjaman(){
        return $this->hasMany(DetailPeminjaman::class, 'id_buku');
    }
    public function ulasan(){
        return $this->hasMany(Ulasan::class, 'id_buku');
    }
}
