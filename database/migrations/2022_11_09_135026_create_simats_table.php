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
        Schema::create('simats', function (Blueprint $table) {
            $table->id();
            $table->string('ano')->nullable();
            $table->string('etc')->nullable();
            $table->string('estado')->nullable();
            $table->string('jerarquia')->nullable();
            $table->string('institucion')->nullable();
            $table->string('dane')->nullable();
            $table->string('calendario')->nullable();
            $table->string('sector')->nullable();
            $table->string('sede')->nullable();
            $table->string('codigo_dane_sede')->nullable();
            $table->string('consecutivo')->nullable();
            $table->string('zona_sede')->nullable();
            $table->string('jornada')->nullable();
            $table->string('grado_cod')->nullable();
            $table->string('grupo')->nullable();
            $table->string('modelo')->nullable();
            $table->string('motivo')->nullable();
            $table->string('fechaini')->nullable();
            $table->string('fechafin')->nullable();
            $table->string('nui')->nullable();
            $table->string('estrato')->nullable();
            $table->string('sisben_iv')->nullable();
            $table->string('per_id')->nullable();
            $table->string('doc')->nullable();
            $table->string('tioodoc')->nullable();
            $table->string('apellido1')->nullable();
            $table->string('apellido2')->nullable();
            $table->string('nombre1')->nullable();
            $table->string('nombre2')->nullable();
            $table->string('genero')->nullable();
            $table->string('fecha_nacimiento')->nullable();
            $table->string('barrio')->nullable();
            $table->string('eps')->nullable();
            $table->string('tipo_de_sangre')->nullable();
            $table->string('matriculacontratada')->nullable();
            $table->string('fuente_recursos')->nullable();
            $table->string('internado')->nullable();
            $table->string('num_contratado')->nullable();
            $table->string('apoyo_academico_especial')->nullable();
            $table->string('srpa')->nullable();
            $table->string('discapacidad')->nullable();
            $table->string('pais_origen')->nullable();
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
        Schema::dropIfExists('simats');
    }
};
