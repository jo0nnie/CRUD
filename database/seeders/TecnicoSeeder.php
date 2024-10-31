<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TecnicoSeeder extends Seeder
{
    public function run()
    {
        DB::table('tecnicos')->insert([
            ['nombre' => 'Juan', 'apellido' => 'Perez', 'telefono' => '123456789', 'especialidad' => 'Conexión','grupo_trabajo' => 'Conexión', 'disponibilidad' => 'disponible'],
            ['nombre' => 'Ana', 'apellido' => 'Gomez', 'telefono' => '987654321', 'especialidad' => 'Instalación Domiciliaria', 'grupo_trabajo' => 'Desconexión', 'disponibilidad' => 'No disponible'], 
            ['nombre' => 'Lucas', 'apellido' => 'Martinez', 'telefono' => '123456789', 'especialidad' => 'Conexión', 'grupo_trabajo' => 'Conexión', 'disponibilidad' => 'Disponible'],
            ['nombre' => 'Sofia', 'apellido' => 'Lopez', 'telefono' => '987123654', 'especialidad' => 'Desconexión', 'grupo_trabajo' => 'Desconexión', 'disponibilidad' => 'Disponible'],
            ['nombre' => 'Camila', 'apellido' => 'Perez', 'telefono' => '456789123', 'especialidad' => 'Reconexión', 'grupo_trabajo' => 'Desconexión', 'disponibilidad' => 'No disponible'],
            ['nombre' => 'Juan', 'apellido' => 'Garcia', 'telefono' => '321654987', 'especialidad' => 'Instalación Domiciliaria', 'grupo_trabajo' => 'Reconexión', 'disponibilidad' => 'No disponible'],
            ['nombre' => 'Carlos', 'apellido' => 'Hernandez', 'telefono' => '789456123', 'especialidad' => 'Conexión', 'grupo_trabajo' => 'Instalación domiciliaria', 'disponibilidad' => 'Disponible'],
            ['nombre' => 'Valentina', 'apellido' => 'Diaz', 'telefono' => '159753486', 'especialidad' => 'Desconexión', 'grupo_trabajo' => 'Desconexión', 'disponibilidad' => 'Disponible'],
            ['nombre' => 'Fernando', 'apellido' => 'Sanchez', 'telefono' => '258963147', 'especialidad' => 'Reconexión', 'grupo_trabajo' => 'Desconexión', 'disponibilidad' => 'No disponible'],
            ['nombre' => 'Julieta', 'apellido' => 'Ramirez', 'telefono' => '357159486', 'especialidad' => 'Instalación Domiciliaria', 'grupo_trabajo' => 'Instalación domiciliaria', 'disponibilidad' => 'No disponible']            
            ]);
        }
}
