<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $fillable = [
        'nombre', // Asegúrate de tener los atributos correctos
        'apellido',
        'email',
        // Otros atributos según sea necesario
    ];
}