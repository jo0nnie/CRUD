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
        Schema::table('orden', function (Blueprint $table) {
            $table->unsignedBigInteger('tecnico_id')->nullable();
            $table->foreign('tecnico_id')->references('id')->on('tecnicos')->onDelete('set null');

            $table->unsignedBigInteger('vehiculo_id')->nullable();
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orden', function (Blueprint $table) {
            $table->dropForeign(['tecnico_id']);
            $table->dropColumn('tecnico_id');
            
            $table->dropForeign(['vehiculo_id']);
            $table->dropColumn('vehiculo_id');
        });
    }
};
