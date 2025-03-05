<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';

    protected $fillable = [
        'usuario',
        'contrasena',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'altura',
        'pesoActual',
        'pesoObjetivo',
        'nivel',
        'rol',
        'numero_tarjeta',
        'nombre_titular',
        'cvv',
        'fecha_vencimiento'
    ];
}
