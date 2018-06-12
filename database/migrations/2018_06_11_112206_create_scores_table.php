<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('用户ID');
            $table->integer('psycho_spirit_id')->comment('心理精神问题ID');
            $table->integer('nutrition_id')->comment('营养问题ID');
            $table->integer('fall_risk_id')->comment('跌到风险问题ID');
            $table->integer('cognitive_ability_id')->comment('认知能力问题ID');
            $table->integer('torso_function_id')->comment('躯干功能问题ID');
            $table->integer('trunk_disease_id')->comment('躯干疾病问题ID');
            $table->integer('scores')->comment('用户分数');
            //外键约束
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('psycho_spirit_id')->references('id')->on('psycho_spirit');
            $table->foreign('nutrition_id')->references('id')->on('nutrition');
            $table->foreign('fall_risk_id')->references('id')->on('fall_risk');
            $table->foreign('cognitive_ability_id')->references('id')->on('cognitive_ability');
            $table->foreign('torso_function_id')->references('id')->on('torso_function');
            $table->foreign('trunk_disease_id')->references('id')->on('trunk_disease');
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
        Schema::dropIfExists('scores');
    }
}
