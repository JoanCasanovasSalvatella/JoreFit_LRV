<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanAsignado extends Model
{
    use HasFactory;
    protected $table = 'planesasignados';

    protected $fillable = [
        'idPlan', 'idUsu', 'completado'
    ];
}
