<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'tb_kamar';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function fasilitas()
    {
        return $this->belongsTo(FasilitasKamar::class);
    }
    public function reservasi()
    {
        return $this->belongsToMany(Reservasi::class);
    }
}
