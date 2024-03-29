<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    public function up()
    {      
            Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
			$table->string('repassword');
			$table->timestamps();

        });
    }

   
    public function down()
    {
              
        Schema::drop('users');

    }
}
