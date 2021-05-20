<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['Nama','Tanggal','Email','Telepon','Alamat','Gender','Password'];
    public $timestamps = false;
    protected $table = 'user'; 
}
