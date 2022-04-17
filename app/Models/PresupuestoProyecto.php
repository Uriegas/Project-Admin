<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresupuestoProyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'proyecto_id',
        'concepto',
        'cantidad',
        'monto'
    ];
}
