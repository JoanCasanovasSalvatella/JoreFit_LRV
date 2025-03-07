<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;
    protected $table = 'ejercicios';

    protected $fillable = [
        'imagen', 'nombre', 'descripcion', 'series', 'repeticiones', 'tipo', 'musculo', 'intensidad'
    ];
}
