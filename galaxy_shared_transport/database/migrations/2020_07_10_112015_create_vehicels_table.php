<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicels', function (Blueprint $table) {
          $table->id();
          $table->bigInteger('onner_id')->unsigned();
          $table->string('vehicle_number',20);
          $table->string('vehicle_name',50);
          $table->bigInteger('logingcapecity');
          $table->boolean('verify');
          $table->timestamps();
          $table->foreign('onner_id')->references('id')->on('users');
          
        });
        DB::table('vehicels')->insert(['onner_id'=>1,'vehicle_number'=>'GJ1 HH5555','vehicle_name'=>'ashok lalen','logingcapecity'=>100000,'verify'=>false]);
        DB::table('vehicels')->insert(['onner_id'=>1,'vehicle_number'=>'GJ1 HH5555','vehicle_name'=>'taya truck','logingcapecity'=>100000,'verify'=>false]);
        
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicels');
    }
}
