<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersBioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 100);
            $table->string('other_name', 100);
            $table->string('last_name', 100);
            $table->longText('bio_description');
            $table->string('gender', 10);
            $table->date('date_of_birth');
            $table->string('residential_address', 2000);
            $table->string('current_location', 2000);
            $table->string('state_of_origin', 2000);
            $table->string('nationality', 25);
            $table->string('profile_picture', 6000);
            $table->string('email')->unique();
            $table->string('phone_number', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bio');
    }
}
