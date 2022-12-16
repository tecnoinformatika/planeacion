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
        Schema::create('rps', function (Blueprint $table) {
            $table->id();
            $table->string('TIPO_DE_DOCUMENTO')->nullable();
            $table->string('NUMERO_DE_DOCUMENTO_DE_IDENTIDAD')->nullable();
            $table->string('PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO')->nullable();
            $table->string('SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO')->nullable();
            $table->string('PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO')->nullable();
            $table->string('SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO')->nullable();
            $table->string('FECHA_DE_NACIMIENTO')->nullable();
            $table->string('GRUPO_ETARIO')->nullable();
            $table->string('PERTENENCIA_ETNICA')->nullable();
            $table->string('Sexo')->nullable();
            $table->string('Grado_Educativo')->nullable();
            $table->string('Tipo_de_complemento')->nullable();
            $table->string('dia_1')->nullable();
            $table->string('dia_2')->nullable();
            $table->string('dia_3')->nullable();
            $table->string('dia_4')->nullable();
            $table->string('dia_5')->nullable();
            $table->string('dia_6')->nullable();
            $table->string('dia_7')->nullable();
            $table->string('dia_8')->nullable();
            $table->string('dia_9')->nullable();
            $table->string('dia_10')->nullable();
            $table->string('dia_11')->nullable();
            $table->string('dia_12')->nullable();
            $table->string('dia_13')->nullable();
            $table->string('dia_14')->nullable();
            $table->string('dia_15')->nullable();
            $table->string('dia_16')->nullable();
            $table->string('dia_17')->nullable();
            $table->string('dia_18')->nullable();
            $table->string('dia_19')->nullable();
            $table->string('dia_20')->nullable();
            $table->string('dia_21')->nullable();
            $table->string('dia_22')->nullable();
            $table->string('dia_23')->nullable();
            $table->string('dia_24')->nullable();
            $table->string('dia_25')->nullable();
            $table->string('dia_26')->nullable();
            $table->string('dia_27')->nullable();
            $table->string('dia_28')->nullable();
            $table->string('dia_29')->nullable();
            $table->string('dia_30')->nullable();
            $table->string('dia_31')->nullable();
            $table->string('MODALIDAD')->nullable();
            $table->string('NO_CLASES')->nullable();
            $table->string('NOVEDADES')->nullable();
            $table->string('TOTAL_DIAS_NO_CONSUMO')->nullable();
            $table->string('SEDE')->nullable();
            $table->string('INSTITUCION')->nullable();
            $table->string('SUPERVISOR_OPERDOR')->nullable();
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
        Schema::dropIfExists('rps');
    }
};
