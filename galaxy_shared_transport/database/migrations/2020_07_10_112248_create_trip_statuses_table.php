<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_statuses', function (Blueprint $table) {
          $table->id();
          $table->string('title');
      });
      DB::table('trip_statuses')->insert(['title'=>'waiting']);
      DB::table('trip_statuses')->insert(['title'=>'accepted']);
      DB::table('trip_statuses')->insert(['title'=>'rech_pickup']);
      DB::table('trip_statuses')->insert(['title'=>'ontheway']);
      DB::table('trip_statuses')->insert(['title'=>'rech_drop']);
      DB::table('trip_statuses')->insert(['title'=>'drop']);
      DB::table('trip_statuses')->insert(['title'=>'Completed']);
  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_statuses');
    }
}
