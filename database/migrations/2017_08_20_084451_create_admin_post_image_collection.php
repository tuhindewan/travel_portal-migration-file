<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPostImageCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_post_image', function (Blueprint $collection) {
            $collection->increments('id');
            $collection->string('image',255);
            $collection->integer('fk_admin_post_id')->unsigned();
            $collection->integer('fk_admin_reg_id')->unsigned();
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
        Schema::dropIfExists('admin_post_image');
    }
}
