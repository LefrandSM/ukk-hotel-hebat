<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'tb_kamar';
    protected $guarded = ['id'];

    public function fasilitas()
    {
        return $this->belongsToMany(FasilitasKamar::class, 'kamar_fasilitas', 'kamar_id', 'fasilitas_id');
    }
    public function reservasi()
    {
        return $this->hasMany(Reservasi::class);
    }
}
