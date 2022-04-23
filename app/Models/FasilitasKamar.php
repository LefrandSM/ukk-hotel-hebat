<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    protected $table = 'tb_fasilitas_kamar';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function kamar()
    {
        return $this->belongsToMany(Kamar::class, 'kamar_fasilitas', 'fasilitas_id', 'kamar_id');
    }
}
