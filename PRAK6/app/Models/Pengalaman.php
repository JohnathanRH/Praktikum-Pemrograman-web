<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    /** @use HasFactory<\Database\Factories\PengalamanFactory> */
    use HasFactory;

    protected $table = 'pengalamans';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
