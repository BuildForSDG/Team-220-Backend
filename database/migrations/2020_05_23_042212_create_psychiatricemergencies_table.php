<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsychiatricemergenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psychiatricemergencies', function(Blueprint $table){
            $table->increments('idPsychiatricEmergencies');
            $table->string('name', 255);
            $table->string('description',1000);
            $table->string('linkToDetails',255);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       schema::dropIfExists ('psychiatricemergencies');
    }
}
