<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_card','18')->nullable()->comment('身份证号码');
            $table->string('username',18)->comment('姓名');
            $table->string('phone',12)->unique()->comment('电话号码');
            $table->string('age','3')->comment('年龄');
            $table->string('birth','12')->comment('出生年月日');
            $table->string('gender','1')->comment('性别');
            $table->string('score','3')->nullable()->comment('分数');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
