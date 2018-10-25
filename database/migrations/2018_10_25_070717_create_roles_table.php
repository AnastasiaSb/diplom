<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id')->unsigned();  //1 изменение
            $table->string('name', 32);
            $table->timestamps();
        });
         Schema::create('user_roles', function (Blueprint $table) { //2 изменение
            $table->integer('user_id')->unsigned();  
            $table->integer('role_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // связь
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade'); // onDelete('cascade') для каскадного удаления, например если удалили пользователя то удаляются и его роли
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}