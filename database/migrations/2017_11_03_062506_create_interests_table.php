<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id');
            $table->timestamps();
        });

        Schema::create('interest_user', function (Blueprint $table) {

            $table->integer('interest_id')->unsigned()->index();
            $table->foreign('interest_id')->references('id')->on('interests')->onDelete('cascade');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('interests');
        Schema::drop('interest_user');
    }
}
