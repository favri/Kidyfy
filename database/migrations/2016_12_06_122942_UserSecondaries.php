<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserSecondaries extends Migration
{
    /**
      * Run the migrations.
      *
      * @return void
     */
    public function up()
    {
      Schema::create('user_secondaries', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('hijos');
        $table->integer('grupos_preferidos');
        $table->string('obrasocial');
        $table->integer('doctor_id')->unsigned();
        $table->integer('user_id')->unsigned();
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
        Schema::drop('user_secondaries');
    }
}
