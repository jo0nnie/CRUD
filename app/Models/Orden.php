<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'orden'; 

    protected $fillable = [
        'numero_orden',
        'direccion',
        'tarea',
        'cliente',
        'fecha',
        'tecnico_id',
        'vehiculo_asignado',
        'materiales_necesarios',
        'estado',
        'acciones', // Atributo para almacenar múltiples acciones
    ];

    public function tecnico()
    {
        return $this->belongsTo(Tecnico::class);
    }
    
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}

