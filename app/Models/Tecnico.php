<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $fillable = ['nombre', 'especialidad'];

    public function ordenes()
    {
        return $this->hasMany(Orden::class);
    }
}

