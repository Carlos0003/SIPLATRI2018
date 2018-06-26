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
            $table->increments('id');
            $table->bigInteger('document')->unique();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('phonenumber');
            $table->string('municipality');
            $table->string('gender');
            $table->string('role')->default('Instructor');
            $table->string('contract');
            $table->string('state')->default('activo');
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
