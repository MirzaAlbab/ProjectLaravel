<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['JUDUL_ARTIKEL','TANGGAL_','KONTEN'];
    public $timestamps = false;
    protected $primaryKey = 'ID_ARTIKEL';
    protected $table = 'sorotan';
}
