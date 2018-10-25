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
            $table->increments('id')->unsigned;  //1 изменение
            $table->string('name', 32);
            $table->string('email', 32)->unique();
            $table->string('phone', 32)->nullable(); // для того что бы можно было добавитть телефон в профиль, а при регистрации будет указан NULL
            $table->string('password', 255); // пароль будет храниться в зашитфрованом виде, поэтому обычно ставят макс кол-во символов
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
