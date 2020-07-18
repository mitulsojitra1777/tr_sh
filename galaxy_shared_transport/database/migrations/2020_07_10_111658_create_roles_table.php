<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
          $table->id();
          $table->string('name',20);

      });
      DB::table('roles')->insert(['name'=>'admin']);
      DB::table('roles')->insert(['name'=>'executive']);
      DB::table('roles')->insert(['name'=>'driver']);
      DB::table('roles')->insert(['name'=>'onner']);
      DB::table('roles')->insert(['name'=>'user']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
