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
            $table->string('telefono'); 
            $table->string('especialidad');
            $table->string('grupo_trabajo');
            $table->string('disponibilidad');

            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('tecnicos');
    }
}
