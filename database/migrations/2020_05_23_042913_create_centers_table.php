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
            $table->string('name', 255);
            $table->string('description', 255);
            $table->string('location', 255);
            $table->string('phoneNumbers', 255);
            $table->string('email', 255);
            // to be public or private center
            $table->string('type', 255);
            $table->string('website', 255);
            $table->string('linkToImage', 255);
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
