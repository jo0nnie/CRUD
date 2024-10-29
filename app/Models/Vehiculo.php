<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $description
 * @property $price
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['description', 'price', 'stock'];
    public function ordenes()
    {
        return $this->hasMany(Orden::class);
    }
    

}
