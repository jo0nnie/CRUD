<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenTable extends Migration
{
    public function up()
    {
        Schema::create('orden', function (Blueprint $table) {
            $table->id();
            $table->string('numero_orden')->default('0');
            $table->string('direccion');
            $table->string('tarea');
            $table->string('cliente');
            $table->date('fecha');
            $table->unsignedBigInteger('tecnico_id')->nullable();
            $table->unsignedBigInteger('vehiculo_id')->nullable();
            $table->string('estado')->default('creado'); // Por defecto, si no es obligatorio
            $table->timestamps();
    
            // Llaves foráneas (opcional)
            $table->foreign('tecnico_id')->references('id')->on('tecnicos');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
        });
    }    

    public function down()
    {
        Schema::dropIfExists('orden');
    }
}

