<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillageGoTosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('village_go_tos', function (Blueprint $table) {
            $table->id();//vehicel_staruses,villages
            $table->unsignedBigInteger('vehicel_starus_id');
            $table->unsignedBigInteger('village_id');
            
            $table->timestamps();
            $table->foreign('vehicel_starus_id')->references('id')->on('vehicel_staruses');
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
        Schema::dropIfExists('village_go_tos');
    }
}
