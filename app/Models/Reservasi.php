<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Tamu;

class Reservasi extends Model
{
    protected $table = 'tb_reservasi';
    protected $guarded = ['id'];


    public function scopeFilter($query)
    {
        // if (request('search')) {
        //     $tamu = Tamu::where('nama_tamu', 'like', '%' . request('search') . '%')->get();
        //     foreach ($tamu as $t) {
        //         $hasil = $query->where('tamu_id', $t->id);
        //     }
        // }

        if (request('check_in')) {
            return $query->where('check_in', 'like', '%' . request('check_in') . '%');
        }
    }

    public function tamu()
    {
        return $this->hasOne(Tamu::class);
    }
    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
