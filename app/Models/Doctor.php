<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['NAMA','JENIS_KELAMIN','EMAIL','NO_TELP','SPESIALISASI','PASSWORD'];
    public $timestamps = false;
    protected $primaryKey = 'ID_DOKTER';
    protected $table = 'dokter';
}
