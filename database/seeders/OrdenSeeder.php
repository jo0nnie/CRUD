<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdenSeeder extends Seeder
{
    public function run()
    {
        DB::table('orden')->insert([
            [
                'numero_orden' => '1234',
                'direccion' => 'Calle Falsa 123',
                'tarea' => 'Conexión',
                'cliente' => 'Juan Perez',
                'fecha' => Carbon::now()->subDays(10),
                'tecnico_id' => 1, // Cambia al ID correcto según tus datos
                'vehiculo_id' => 1, // Cambia al ID correcto según tus datos
                'estado' => 'creado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'numero_orden' => '5678',
                'direccion' => 'Av. Siempre Viva 742',
                'tarea' => 'Desconexión',
                'cliente' => 'Ana Gomez',
                'fecha' => Carbon::now()->subDays(7),
                'tecnico_id' => 2,
                'vehiculo_id' => 2,
                'estado' => 'creado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'numero_orden' => '9101',
                'direccion' => 'Calle Real 456',
                'tarea' => 'Reconexión',
                'cliente' => 'Pedro Sanchez',
                'fecha' => Carbon::now()->subDays(5),
                'tecnico_id' => 3,
                'vehiculo_id' => 3,
                'estado' => 'creado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'numero_orden' => '1123',
                'direccion' => 'Calle Secundaria 789',
                'tarea' => 'Instalación Domiciliaria',
                'cliente' => 'Laura Morales',
                'fecha' => Carbon::now()->subDays(3),
                'tecnico_id' => 4,
                'vehiculo_id' => 4,
                'estado' => 'creado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}



