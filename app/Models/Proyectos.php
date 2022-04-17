<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;

    //protected $table = 'proyectos';

    protected $fillable = [
        'nombre_proyecto','nombre_cliente','presupuesto','integrantes','descripcion',
    ];

}
