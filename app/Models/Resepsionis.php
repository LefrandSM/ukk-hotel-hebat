<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Resepsionis extends Authenticatable
{
    protected $table = 'tb_resepsionis';
    protected $guarded = ['id'];
    protected $guard = 'resepsionis';
    public $timestamps = false;
}
