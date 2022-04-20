<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = 'tb_tamu';
    protected $guarded = ['id'];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class);
    }
}
