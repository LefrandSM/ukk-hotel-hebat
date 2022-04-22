<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    protected $table = 'tb_fasilitas_kamar';
    protected $guarded = ['id'];

    public function kamar()
    {
        return $this->belongsToMany(Kamar::class, 'kamar_fasilitas', 'kamar_id', 'fasilitas_id');
    }
}
