<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactoTable extends Migration
{
  public function up(){

      Schema::create('contacts', function (Blueprint $table) {
        $table->string('name_contact')->unsigned();
        $table->string('subject_contact')->unsigned();
        $table->string('contact_text')->unsigned();
        $table->timestamps();
    });
  }

    public function down(){

        Schema::drop('contacts');
    }
}
