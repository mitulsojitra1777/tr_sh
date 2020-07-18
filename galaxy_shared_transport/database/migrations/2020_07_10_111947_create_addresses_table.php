<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
          $table->id();
          $table->string('village',20);
          $table->string('taluka',20);
          $table->string('nrCity',20);
          $table->string('distic',20);
          $table->string('landmark',50);
          $table->string('state',20);
          $table->string('country',20);
          $table->string('pincode',7);

      });
      DB::table('addresses')->insert(['village'=>'vichhavad','taluka'=>'visavadar','nrCity'=>'Bhesan','distic'=>'junagadh','landmark'=>'oop primary school, nr gram panchayat','state'=>'gujrat','country'=>'india','pincode'=>'362020']);
      DB::table('addresses')->insert(['village'=>'visavadar','taluka'=>'visavadar','nrCity'=>'Bhesan','distic'=>'junagadh','landmark'=>'oop primary school, nr gram panchayat','state'=>'gujrat','country'=>'india','pincode'=>'362020']);
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
