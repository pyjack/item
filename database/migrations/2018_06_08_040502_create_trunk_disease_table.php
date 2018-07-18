<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrunkDiseaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trunk_disease', function (Blueprint $table) {
            $table->increments('id');
            $table->string('questions', '255')->default('')->comment('问题');
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
        Schema::dropIfExists('trunk_disease');
    }
}
