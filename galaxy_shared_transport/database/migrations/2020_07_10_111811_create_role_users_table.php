<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_users', function (Blueprint $table) {
          $table->bigInteger('user_id')->unsigned();
          $table->unsignedBigInteger('role_id')->unsigned();
          $table->foreign('role_id')->references('id')->on('roles');
          $table->foreign('user_id')->references('id')->on('users');
        });
        DB::table('role_users')->insert(['user_id'=>1,'role_id'=>1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_users');
    }
}
