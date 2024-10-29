<?php


// database/migrations/2024_10_27_234159_create_orden_table.php
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
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orden');
    }
}

