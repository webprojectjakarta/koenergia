<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribution', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pohon');
            $table->integer('kg');
            $table->integer('kwh');
            $table->integer('rumah');
            $table->integer('ltr');
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
        Schema::dropIfExists('contribution');
    }
}
