<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;

    protected $table = 'proyectos';

    protected $fillable = [
        'descripcion',
        'cliente_id',
        'presupuesto',
        'presupuesto_id',
        'inicio',
        'fin',
        'imagen'
    ];
}
