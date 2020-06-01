<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('location');
            $table->string('phoneNumbers');
            $table->string('email');
            $table->enum('type',['public','private']);
            $table->string('website');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('centers');
    }
}
