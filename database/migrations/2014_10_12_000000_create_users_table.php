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
            $table->string('username')->unique();
            $table->string('longname')->defaut('');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('unit_two_id');
            $table->integer('jabatan_id');
            $table->integer('lokasi_id');
            $table->boolean('isDone')->default(false);
            $table->boolean('isAdmin')->default(false);
            $table->remembertoken();
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
        Schema::drop('users');
    }
}
