<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
          $table->id();
          $table->string('doc_number');
          $table->string('type',20);
          $table->string('img');
          $table->boolean('verify');
          $table->unsignedBigInteger('user_id');
          
          $table->timestamps();
          
          $table->foreign('user_id')->references('id')->on('users');


      });
        

  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
