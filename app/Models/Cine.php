<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cine extends Model
{
    /** @use HasFactory<\Database\Factories\CineFactory> */
    use HasFactory;

    protected $fillable = [
        "nombre",
        'descripcion',
        'precio',
        'activo'
    ];
}
