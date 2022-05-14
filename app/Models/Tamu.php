<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Tamu extends Authenticatable
{
    protected $table = 'tb_tamu';
    protected $guarded = ['id'];
    protected $guard = 'tamu';

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class);
    }
}
