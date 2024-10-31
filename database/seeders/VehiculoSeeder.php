<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{
    public function run()
    {
        DB::table('vehiculos')->insert([
            [
                'descripcion' => 'Camioneta 4x4 para terrenos difíciles',
                'modelo' => 'Toyota Hilux',
                'stock' => 5,
                'equipo_trabajo' => 'Equipo A',
                'disponibilidad' => 'disponible',
                'estado' => 'nuevo',
            ],
            [
                'descripcion' => 'Furgoneta para transporte de herramientas',
                'modelo' => 'Ford Transit',
                'stock' => 3,
                'equipo_trabajo' => 'Equipo B',
                'disponibilidad' => 'no_disponible',
                'estado' => 'viejo',
            ],
        ]);
    }
}
