<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Instructor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

         Schema::create('instructor_94231s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
             $table->string('last_name');
             $table->string('gym');
            $table->string('email');
            $table->string('gender');
            $table->string('photo');
            $table->string('contacts');
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
