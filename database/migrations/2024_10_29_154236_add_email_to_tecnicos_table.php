<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tecnicos', function (Blueprint $table) {
            // Modifica la columna 'telefono' para que sea nullable
            $table->string('telefono')->nullable()->change();
            // Agrega la columna 'email' que es única
            $table->string('email')->unique()->after('telefono');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('tecnicos', function (Blueprint $table) {
            // Elimina la columna 'email' en caso de reversión
            $table->dropColumn('email');
            // Si deseas revertir 'telefono' a no nullable, agrega esta línea
            $table->string('telefono')->nullable(false)->change();
        });
    }
};
