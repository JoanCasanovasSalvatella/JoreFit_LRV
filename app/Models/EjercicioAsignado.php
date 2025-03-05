<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EjercicioAsignado extends Model
{
    use HasFactory;
    protected $table = 'ejerciciosasignados';

    protected $fillable = [
        'idPlan', 'idEjer', 'idUsu', 'completado'
    ];
}
