<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersHasPsychiatricemergenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_has_psychiatricemergencies',function(Blueprint $table){
            $table->is_integer('users_id');
            $table->is_integer('psychiatricemergencies_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        dropIfExists('users_has_psychiatricemergencies');
    }
}
