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
        Schema::create('cortes', function (Blueprint $table) {
            $table->id();
            $table->string('tipodoc')->nullable();
            $table->string('documento')->nullable();
            $table->string('nombre1')->nullable();
            $table->string('nombre2')->nullable();
            $table->string('apellido1')->nullable();
            $table->string('apellido2')->nullable();
            $table->string('fechaNacimiento')->nullable();
            $table->string('grupoEtario')->nullable();
            $table->string('pertenenciaEtnica')->nullable();
            $table->string('sexo')->nullable();
            $table->string('gradoEducativa')->nullable();
            $table->string('tipoComplemento')->nullable();
            $table->biginteger('codigo_dane_sede')->nullable();
            $table->string('cruceDocumento')->nullable();
            $table->string('cruceNombre')->nullable();
            $table->string('observacion')->nullable();
            $table->string('corte')->nullable();
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
        Schema::dropIfExists('cortes');
    }
};
