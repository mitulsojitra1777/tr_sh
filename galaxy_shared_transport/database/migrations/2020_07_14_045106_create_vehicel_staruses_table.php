<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicelStarusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicel_staruses', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vehicel_id');
            $table->string('status',10);
            $table->string('trip_status');
            $table->unsignedBigInteger('village_id')->unsigned();
            $table->date('login');
            $table->time('loginon');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vehicel_id')->references('id')->on('vehicels');
            $table->foreign('village_id')->references('id')->on('villages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicel_staruses');
    }
}
