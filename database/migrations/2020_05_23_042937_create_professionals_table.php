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
            $table->string('first_name');
            $table->string('last_name');
            $table->text('description');
            $table->string('location');
            $table->string('phone_numbers');
            $table->string('email');
            // to be public or private center
            $table->string('type');
            $table->string('website');
            $table->string('image');
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
