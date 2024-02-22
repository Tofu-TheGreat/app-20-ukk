<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;
    protected $table = "kategori_buku";
    protected $guarded = [];

    public function buku(){
        return $this->belongsTo(Buku::class, 'id_buku');
    }
    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
