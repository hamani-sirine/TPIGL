<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
///Migration class.
///
///Migration class used to create database table "note"
class CreateNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note', function (Blueprint $table) {
            $table->bigIncrements('id_note');
            $table->bigInteger('id_module');
            $table->bigInteger('id_etud');
            $table->float('cc')->default('0.00');
            $table->float('ci')->default('0.00');
            $table->float('cf')->default('0.00');
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
        Schema::dropIfExists('note');
    }
}
