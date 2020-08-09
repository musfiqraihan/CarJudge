<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->integer('car_id');
            $table->string('type');
            $table->integer('orating');
            $table->integer('crating');
            $table->integer('irating');
            $table->integer('prating');
            $table->integer('mrating');
            $table->integer('rrating');
            $table->string('heading');
            $table->text('message');
            $table->string('name');
            $table->string('city');
            $table->string('email');
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
        Schema::dropIfExists('reviews');
    }
}
