<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTecnicoIdAndVehiculoIdToOrdenTable extends Migration
{
    public function up()
    {
        Schema::table('orden', function (Blueprint $table) {
            if (!Schema::hasColumn('orden', 'tecnico_id')) {
                $table->unsignedBigInteger('tecnico_id')->nullable();
            }
            if (!Schema::hasColumn('orden', 'vehiculo_id')) {
                $table->unsignedBigInteger('vehiculo_id')->nullable();
            }

            // Especifica nombres únicos para las claves foráneas
            $table->foreign('tecnico_id', 'fk_orden_tecnico_id')->references('id')->on('tecnicos')->onDelete('cascade');
            $table->foreign('vehiculo_id', 'fk_orden_vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('orden', function (Blueprint $table) {
            $table->dropForeign('fk_orden_tecnico_id');
            $table->dropForeign('fk_orden_vehiculo_id');
            $table->dropColumn(['tecnico_id', 'vehiculo_id']);
        });
    }
}
