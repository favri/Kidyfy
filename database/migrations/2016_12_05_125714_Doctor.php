<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Doctor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('doctors', function (Blueprint $table) {
         $table->increments('id');
         $table->string('name');
         $table->string('email')->unique();
         $table->string('password');
         $table->date('fecha_de_nacimiento');
         $table->enum('genero', ['F','M']);
         $table->string('especialidad');
         $table->string('obrasocial');
         $table->rememberToken();
         $table->timestamps();
       });

       Schema::create('doctor_images', function (Blueprint $table) {
         $table->increments('id');
         $table->string('src');
         $table->timestamps();
         $table->integer('doctor_id')->unsigned();
       });

     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('doctors');
         Schema::drop('doctor_images');
     }
 }
