<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'descripcion',  
        'modelo',
        'stock',
        'equipo_trabajo',
    ];
}
