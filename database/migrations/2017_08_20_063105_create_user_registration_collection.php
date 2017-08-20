<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRegistrationCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_signup', function (Blueprint $collection) {
            $collection->increments('id');
            $collection->string('gender');
            $collection->string('firstname',50);
            $collection->string('middlename',50)->nullable();
            $collection->string('lastname',50);
            $collection->string('email',50)->unique();
            $collection->integer('phone',15);
            $collection->string('username',20)->unique();
            $collection->string('password',255);
            $collection->tinyInteger('status')->default('0'); // value 0 for non-varified
            $collection->integer('fk_city_id')->unsigned();
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_signup');
    }
}
