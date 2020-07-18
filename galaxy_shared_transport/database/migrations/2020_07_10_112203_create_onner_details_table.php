<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnnerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onner_details', function (Blueprint $table) {
          $table->id();
          $table->bigInteger('status');
          $table->bigInteger('user_id')->unsigned();
          $table->bigInteger('onner_id')->unsigned();

          $table->foreign('user_id')->references('id')->on('users');

          $table->foreign('onner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onner_details');
    }
}
