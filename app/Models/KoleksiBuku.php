<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiBuku extends Model
{
    use HasFactory;
    protected $primaryKey = "id_koleksi_buku";
    protected $table = "koleksi_buku";
    protected $guarded = [];

    public function buku(){
        return $this->belongsTo(Buku::class, 'id_buku');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
