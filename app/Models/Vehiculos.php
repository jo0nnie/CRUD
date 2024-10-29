<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    public function ordenes()
{
    return $this->hasMany(Orden::class);
}

}
