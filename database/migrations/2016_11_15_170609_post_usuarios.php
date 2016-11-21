<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('posts', function (Blueprint $table) {
        $table->increments('id');
         $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
        $table->string('post_text');
        $table->integer('append_postid');
        $table->ipAddress('visitor');
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
      Schema::drop('posts');
    }
}
