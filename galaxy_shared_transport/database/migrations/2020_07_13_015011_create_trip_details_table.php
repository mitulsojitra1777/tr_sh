<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('from_address_id')->unsigned();
            $table->unsignedBigInteger('to_address_id')->unsigned();
            $table->unsignedBigInteger('status')->unsigned();
            $table->unsignedBigInteger('trip_id')->nullable();
            $table->string('pickup_person');
            $table->string('drop_person');
            $table->string('pickup_contact');
            $table->string('drop_contact');
            $table->bigInteger('loading');
            $table->foreign('from_address_id')->references('id')->on('addresses');
            $table->foreign('to_address_id')->references('id')->on('addresses');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('trip_id')->references('id')->on('trips');
            $table->foreign('status')->references('id')->on('trip_statuses');
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
        Schema::dropIfExists('trip_details');
    }
}
