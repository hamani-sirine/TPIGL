<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
///Migration class.
///
///Migration class used to create database table "user"

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) 
        {
            $table->bigIncrements('id_user');
            $table->string('login')->nullable();
            $table->string('email')->nullable();
            $table->string('mdp')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('fonction')->nullable();
            $table->bigInteger('id')->nullable();
            
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
