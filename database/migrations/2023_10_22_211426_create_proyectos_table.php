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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string( 'NombreProyecto');
            $table->string( 'fuenteFondos');
            $table->decimal( 'MontoPlanificado' ,10,2);
            $table->decimal( 'MontoPatrocinado' ,10,2);
            $table->decimal( 'MontoFondosPropios' ,10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
