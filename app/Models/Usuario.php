<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PlanAsignado;
use App\Models\EjercicioAsignado;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'correo',
        'contrasena',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'pesoActual',
        'pesoObjetivo',
        'nivel',
        'rol'
    ];

    // Relación con el modelo PlanAsignado
    public function planesAsignados()
    {
        return $this->hasMany(PlanAsignado::class, 'idUsu');
    }

    // Relación con el modelo EjercicioAsignado
    public function ejerciciosAsignados()
    {
        return $this->hasMany(EjercicioAsignado::class, 'idUsu');
    }
}
