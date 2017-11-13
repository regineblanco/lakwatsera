<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferenceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preference_user', function (Blueprint $table) {
          $table->integer('preference_id')->unsigned()->index();
          $table->foreign('preference_id')->references('id')->on('preferences')->onDelete('cascade');

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
        Schema::dropIfExists('preference_user');
    }
}
