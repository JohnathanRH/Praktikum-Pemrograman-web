<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit'
    ];
}
