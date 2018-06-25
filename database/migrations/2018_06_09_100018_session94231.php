<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Session94231 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('sessions_94231s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userId')->unique();
            $table->string('date');
            $table->string('email');
             $table->string('excercise_type');
              $table->string('location');
             $table->string('number_of_sets');
            $table->string('weight_after');
            $table->string('timeframe');
            $table->rememberToken();
            $table->timestamps();
        });
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
