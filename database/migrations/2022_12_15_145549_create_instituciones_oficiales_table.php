<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones_oficiales', function (Blueprint $table) {
            $table->id();
            $table->string('CodEstable')->nullable();
            $table->string('NomEstable')->nullable();
            $table->string('CodSede')->nullable();
            $table->string('NomSede')->nullable();
            $table->string('Tipo')->nullable();
            $table->string('Zona')->nullable();
            $table->string('Direccion')->nullable();
            $table->string('Telefono')->nullable();
            $table->string('EstadoSede')->nullable();
            $table->string('Niveles')->nullable();
            $table->string('Modelos')->nullable();
            $table->string('Grados')->nullable();
            $table->string('X')->nullable();
            $table->string('Y')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituciones_oficiales');
    }
};
