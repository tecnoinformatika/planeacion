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
        Schema::table('consolidados', function (Blueprint $table) {  
            $table->integer('corte')->nullable()->after('consolidado');
        });

        Schema::table('consolidados_especiales', function (Blueprint $table) {  
            $table->integer('corte')->nullable()->after('consolidado');
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
