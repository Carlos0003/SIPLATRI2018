<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('idrecord')->unique();
            $table->integer('program_id')->unsigned();
            $table->foreign('program_id')->references('id')->on('programs');
            $table->string('totalquarter');
            $table->string('currentquarter');
            $table->string('programtype');
            $table->bigInteger('startdate');
            $table->bigInteger('endingdate');
            $table->bigInteger('scheduledhours');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('municipality')->default('Manizales');
            $table->bigInteger('starttime');
            $table->bigInteger('endtime');
            $table->string('matter');
            $table->integer('classroom_id')->unsigned();
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->integer('groupmanager')->unsigned();
            $table->foreign('groupmanager')->references('id')->on('users');
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
        Schema::dropIfExists('records');
    }
}
