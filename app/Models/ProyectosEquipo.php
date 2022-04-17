<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectosEquipo extends Model
{
    use HasFactory;

    protected $table = 'proyectosequipo';

    protected $fillable = [
        'proyecto_id',
        'empleado_id',
    ];
}
