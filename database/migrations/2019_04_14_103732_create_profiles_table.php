<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->integer('user_id')->unsigned();
            $table->string('photo')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->longText('biography')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
