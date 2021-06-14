<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guard = 'doctor';
    protected $fillable = ['nama','gender','email','telp','spesialisasi','password'];
    protected $table = 'dokter';
}
