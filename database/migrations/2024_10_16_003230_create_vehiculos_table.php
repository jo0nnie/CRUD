<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion'); 
            $table->string('modelo');
            $table->integer('stock');
            $table->string('equipo_trabajo');
            $table->string('disponibilidad');
            $table->string('estado');
            $table->timestamps();
        });
                
    }

    public function down()
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->dropColumn('disponibilidad');
            $table->dropColumn('estado');
        });
    }
};

