<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembaca extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pembaca';
    protected $table = 'pembaca';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
