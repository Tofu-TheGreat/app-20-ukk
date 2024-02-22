<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kategori';
    protected $table = 'kategori';
    protected $guarded = [];

    public function kategori_buku(){
        return $this->hasMany(KategoriBuku::class, 'id_kategori');
    }
}
