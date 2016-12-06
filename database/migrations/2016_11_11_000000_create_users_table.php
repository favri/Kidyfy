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
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->date('fecha_de_nacimiento');
        $table->enum('genero', ['F','M']);
        $table->rememberToken();
        $table->timestamps();
      });

      // Schema::create('images', function (Blueprint $table) {
      //   $table->increments('id');
      //   $table->string('src');
      //   $table->timestamps();
      //   $table->integer('user_id')->unsigned();
      // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        // Schema::drop('images');
    }
}
