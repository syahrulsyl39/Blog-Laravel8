<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    use HasFactory;

    protected $fillable = [
        'penulis',
        'biografi',
        'jabatan',
        'gambar',
        'slug',
    ];
}
