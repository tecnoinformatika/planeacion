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
        Schema::table('ris', function (Blueprint $table) {            
            $table->string('observacionesMatricula')->nullable()->after('SUPERVISOR_OPERDOR');
            $table->string('observacionesConteo')->nullable()->after('observacionesMatricula');
            $table->string('observacionesSupervisor')->nullable()->after('observacionesConteo');
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
