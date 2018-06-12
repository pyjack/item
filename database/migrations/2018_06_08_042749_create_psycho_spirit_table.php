<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsychoSpiritTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psycho_spirit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('questions', '255')->default('')->comment('问题');
            $table->string('score', '3')->default('0')->comment('分值');
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
        Schema::dropIfExists('psycho_spirit');
    }
}
