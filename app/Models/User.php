<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['NAMA','JENIS_KELAMIN','EMAIL','TANGGAL_LAHIR','ALAMAT','NO_TELP','PASSWORD'];
    public $timestamps = false;
    protected $primaryKey = 'ID_PASIEN';
    protected $table = 'pasien'; 
}
