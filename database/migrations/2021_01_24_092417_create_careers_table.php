<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('requirement1');
            $table->string('requirement2');
            $table->string('requirement3');
            $table->string('requirement4');
            $table->string('requirement5');
            $table->string('requirement6');
            $table->string('requirement7');
            $table->string('requirement8');
            $table->string('requirement9');
            $table->string('requirement10');
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
        Schema::dropIfExists('careers');
    }
}
