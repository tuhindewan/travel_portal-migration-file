<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPostCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_post', function (Blueprint $collection) {
            $collection->increments('id');
            $collection->integer('fk_user_signup_id')->unsigned();
            $collection->integer('fk_place_id')->unsigned();
            $collection->string('headline',100);
            $collection->text('description');
            $collection->string('tag',20);
            $collection->integer('hits_count');
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
        Schema::dropIfExists('user_post');
    }
}
