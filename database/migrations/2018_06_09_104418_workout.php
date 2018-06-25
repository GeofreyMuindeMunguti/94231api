<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Workout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles_94231s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
             $table->string('age');
              $table->string('location');
             $table->string('weight');
            $table->string('weight_target');
            $table->string('timeframe');
            $table->rememberToken();
            $table->timestamps();
        });
        //
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
