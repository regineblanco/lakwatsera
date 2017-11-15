<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItineraryUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerary_user', function (Blueprint $table) {
            $table->integer('itinerary_id')->unsigned()->index();
            $table->foreign('itinerary_id')->references('id')->on('itineraries')->onDelete('cascade');
            //unsigned: always be positive nos.
            //index: anticipating need for a lot of searches

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
        Schema::dropIfExists('itinerary_user');
    }
}
