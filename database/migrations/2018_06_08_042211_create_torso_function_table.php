<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorsoFunctionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torso_function', function (Blueprint $table) {
            $table->increments('id');
            $table->string('questions', '255')->default(null)->comment('问题');
            $table->string('yes', '3')->default(null)->comment('分值');
            $table->string('no', '3')->default(null)->comment('分值');
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
        Schema::dropIfExists('torso_function');
    }
}
