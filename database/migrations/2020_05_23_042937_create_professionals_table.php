<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function(Blueprint $table){
            $table->id();
            $table->string('firstName', 255);
            $table->string('lastName', 255);
            $table->string('description',1000);
            $table->string('location',255); 
            $table->string('phoneNumbers', 255);
            $table->string('email', 255);
            // to be public or private center
            $table->string('type', 255);
            $table->string('website', 255);
            $table->string('linkToImage', 255);
            $table->unsignedBigInteger('centers_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists ('professionals');
    }
}
