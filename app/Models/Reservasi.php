<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'tb_reservasi';
    protected $guarded = ['id'];


    public function tamu()
    {
        return $this->hasOne(Tamu::class);
    }
    public function kamar()
    {
        return $this->belongsToMany(Kamar::class);
    }
}
