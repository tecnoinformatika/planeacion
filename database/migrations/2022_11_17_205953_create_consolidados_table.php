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
        Schema::create('consolidados', function (Blueprint $table) {
            $table->id();            
            $table->foreignId('user_id')->nullable()->index();
            $table->bigInteger('codigo_dane_sede')->nullable();
            $table->string('jornada_tipo_racion')->nullable();
            $table->integer('dia1')->nullable();
            $table->integer('dia2')->nullable();
            $table->integer('dia3')->nullable();
            $table->integer('dia4')->nullable();
            $table->integer('dia5')->nullable();
            $table->integer('dia6')->nullable();
            $table->integer('dia7')->nullable();
            $table->integer('dia8')->nullable();
            $table->integer('dia9')->nullable();
            $table->integer('dia10')->nullable();
            $table->integer('dia11')->nullable();
            $table->integer('dia12')->nullable();
            $table->integer('dia13')->nullable();
            $table->integer('dia14')->nullable();
            $table->integer('dia15')->nullable();
            $table->integer('dia16')->nullable();
            $table->integer('dia17')->nullable();
            $table->integer('dia18')->nullable();
            $table->integer('dia19')->nullable();
            $table->integer('dia20')->nullable();
            $table->integer('dia21')->nullable();
            $table->integer('dia22')->nullable();
            $table->integer('dia23')->nullable();
            $table->integer('dia24')->nullable();
            $table->integer('dia25')->nullable();
            $table->integer('dia26')->nullable();
            $table->integer('dia27')->nullable();
            $table->integer('dia28')->nullable();
            $table->integer('dia29')->nullable();
            $table->integer('dia30')->nullable();
            $table->integer('dia31')->nullable();
            $table->integer('N_dias_atendidos')->nullable();
            $table->integer('total_raciones')->nullable();
            $table->integer('novedades')->nullable();
            $table->integer('devoluciones')->nullable();
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
        Schema::dropIfExists('consolidados');
    }
};
