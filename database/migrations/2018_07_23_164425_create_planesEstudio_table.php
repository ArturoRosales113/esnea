<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesEstudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planesEstudio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('body');
            $table->string('front_pic');
            $table->string('banner_pic');
            $table->string('profile_title');
            $table->string('profile_body');
            $table->string('profile_pic');
            $table->string('plan_pdf');
            $table->boolean('isDiplomado')->default(false);
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
        Schema::dropIfExists('planesEstudio');
    }
}
