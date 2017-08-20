<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRegistrationCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_registration', function (Blueprint $collection) {
            $collection->increments('id');
            $collection->string('firstname',50);
            $collection->string('lastname',50);
            $collection->string('username',20)->unique();
            $collection->string('email',100)->unique();
            $collection->string('password',255);
            $collection->tinyInteger('status')->default('0'); // value 0 for active and 1 for inactive
            $collection->text('address');
            $collection->integer('phone',15);
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
        Schema::dropIfExists('admin_registration');
    }
}
