<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceImageCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_image', function (Blueprint $collection) {
            $collection->increments('id');
            $collection->integer('fk_place_id')->unsigned();
            $collection->string('image',255);  //should be multi-uploading system
            $collection->string('caption',150);
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
        Schema::dropIfExists('place_image');
    }
}
