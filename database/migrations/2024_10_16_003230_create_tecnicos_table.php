<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnicosTable extends Migration
{
    public function up()
    {
        Schema::create('tecnicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono')->unique(); // Asegúrate de que esta línea esté aquí si deseas agregar el email
            $table->string('especialidad');
            $table->timestamps();
            // Migration de la tabla ordens
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('tecnicos');
    }
}
