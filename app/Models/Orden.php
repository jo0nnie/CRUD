<?php

// App/Models/Orden.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'orden'; // Especificar la tabla

    protected $fillable = [
        'numero_orden',
        'direccion',
        'tarea',
        'cliente',
        'fecha',
        'tecnico_id',
        'vehiculo_asignado',
        'materiales_necesarios',
        'estado', // Puede ser: Creado, En proceso, Finalizado, No realizado
    ];

    public function tecnico()
    {
        return $this->belongsTo(Tecnico::class);
    }
}
