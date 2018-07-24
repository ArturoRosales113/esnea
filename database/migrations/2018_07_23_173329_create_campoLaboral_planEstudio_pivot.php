<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampoLaboralPlanEstudioPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campoLaboral_planEstudio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campoLaboral_id');
            $table->integer('planEstudio_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campoLaboral_planEstudio');
    }
}
