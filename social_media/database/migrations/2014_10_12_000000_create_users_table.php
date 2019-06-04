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
            $table->bigIncrements('id');
	        $table->string('firstname');
	        $table->string('lastname');
            $table->string('email')->unique();
	        $table->date('birthDate');
	        $table->string('street');
	        $table->string('mobile');
            $table->string('password');
	        $table->integer('schoolClasses_id')->unsigned();
	        $table->integer('cities_id')->unsigned();
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
