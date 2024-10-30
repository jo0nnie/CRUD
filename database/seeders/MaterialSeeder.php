<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    public function run()
    {
        Material::insert([
            ['nombre' => 'Router', 'cantidad' => 10, 'descripcion' => 'Router de alta velocidad'],
            ['nombre' => 'Modem', 'cantidad' => 15, 'descripcion' => 'Modem de fibra óptica'],
            ['nombre' => 'Cable Ethernet', 'cantidad' => 50, 'descripcion' => 'Cable Ethernet de 5 metros'],
            ['nombre' => 'Switch', 'cantidad' => 8, 'descripcion' => 'Switch de 8 puertos'],
            ['nombre' => 'Antena Wi-Fi', 'cantidad' => 20, 'descripcion' => 'Antena Wi-Fi de largo alcance'],
        ]);
    }
}

