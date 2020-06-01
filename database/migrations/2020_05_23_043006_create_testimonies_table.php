<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonies', function(Blueprint $table){
            $table->id();
            $table->string('title', 255);
            $table->string('content',1000);
            $table->string('linkToDetail', 255);
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
        Schema::dropIfExists('testimonies');
    }
}
