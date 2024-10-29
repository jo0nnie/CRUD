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
        Schema::table('orden', function (Blueprint $table) {
            $table->string('numero_orden')->default('N/A')->change(); // Cambia 'N/A' por el valor predeterminado que prefieras
        });
    }
    
    public function down()
    {
        Schema::table('orden', function (Blueprint $table) {
            $table->string('numero_orden')->nullable(false)->change();
        });
    }
    
};
