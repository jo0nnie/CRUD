<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'descripcion',  // Asegúrate de que esté aquí
        'modelo',
        'stock',
        'equipo_trabajo',
    ];
}


