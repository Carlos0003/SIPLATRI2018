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
            $table->date('startdate');
            $table->date('endingdate');
            $table->integer('scheduledhours');
            $table->integer('groupmanager')->unsigned();
            $table->foreign('groupmanager')->references('id')->on('users');
            $table->string('municipality')->default('Manizales');
            //lunes
            $table->string('day1');
            $table->date('starttime1');
            $table->date('endtime1');
            $table->string('matter1');
            $table->integer('classroom_id1')->unsigned();
            $table->foreign('classroom_id1')->references('id')->on('classrooms');
            $table->integer('user_id1')->unsigned();
            $table->foreign('user_id1')->references('id')->on('users');
            $table->date('starttime2');
            $table->date('endtime2');
            $table->string('matter2');
            $table->integer('classroom_id2')->unsigned();
            $table->foreign('classroom_id2')->references('id')->on('classrooms');
            $table->integer('user_id2')->unsigned();
            $table->foreign('user_id2')->references('id')->on('users');
            $table->date('starttime3');
            $table->date('endtime3');
            $table->string('matter3');
            $table->integer('classroom_id3')->unsigned();
            $table->foreign('classroom_id3')->references('id')->on('classrooms');
            $table->integer('user_id3')->unsigned();
            $table->foreign('user_id3')->references('id')->on('users');
            $table->date('starttime4');
            $table->date('endtime4');
            $table->string('matter4');
            $table->integer('classroom_id4')->unsigned();
            $table->foreign('classroom_id4')->references('id')->on('classrooms');
            $table->integer('user_id4')->unsigned();
            $table->foreign('user_id4')->references('id')->on('users');
            $table->date('starttime5');
            $table->date('endtime5');
            $table->string('matter5');
            $table->integer('classroom_id5')->unsigned();
            $table->foreign('classroom_id5')->references('id')->on('classrooms');
            $table->integer('user_id5')->unsigned();
            $table->foreign('user_id5')->references('id')->on('users');
            $table->date('starttime6');
            $table->date('endtime6');
            $table->string('matter6');
            $table->integer('classroom_id6')->unsigned();
            $table->foreign('classroom_id6')->references('id')->on('classrooms');
            $table->integer('user_id6')->unsigned();
            $table->foreign('user_id6')->references('id')->on('users');
            $table->date('starttime7');
            $table->date('endtime7');
            $table->string('matter7');
            $table->integer('classroom_id7')->unsigned();
            $table->foreign('classroom_id7')->references('id')->on('classrooms');
            $table->integer('user_id7')->unsigned();
            $table->foreign('user_id7')->references('id')->on('users');
            $table->date('starttime8');
            $table->date('endtime8');
            $table->string('matter8');
            $table->integer('classroom_id8')->unsigned();
            $table->foreign('classroom_id8')->references('id')->on('classrooms');
            $table->integer('user_id8')->unsigned();
            $table->foreign('user_id8')->references('id')->on('users');
            $table->date('starttime9');
            $table->date('endtime9');
            $table->string('matter9');
            $table->integer('classroom_id9')->unsigned();
            $table->foreign('classroom_id9')->references('id')->on('classrooms');
            $table->integer('user_id9')->unsigned();
            $table->foreign('user_id9')->references('id')->on('users');
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