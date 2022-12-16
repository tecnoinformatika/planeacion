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
        Schema::table('simats', function (Blueprint $table) {            
            $table->string('documento')->nullable()->after('tioodoc');
            $table->dropColumn('barrio');
            $table->dropColumn('eps');
            $table->dropColumn('tipo_de_sangre');
            $table->dropColumn('matriculacontratada');
            $table->dropColumn('fuente_recursos');
            $table->dropColumn('internado');
            $table->dropColumn('num_contratado');
            $table->dropColumn('apoyo_academico_especial');
            $table->dropColumn('srpa');
            $table->dropColumn('discapacidad');
            $table->dropColumn('pais_origen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
