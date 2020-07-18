<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('user_id')->nullable();
          $table->unsignedBigInteger('vehicel_id')->nullable();
          $table->string('trip_type');
          $table->bigInteger('pending_space');
          $table->timestamps();
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('vehicel_id')->references('id')->on('vehicels');

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
