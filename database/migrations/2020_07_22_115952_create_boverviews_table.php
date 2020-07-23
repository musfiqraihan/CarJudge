<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoverviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boverviews', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->string('car_image')->nullable;
              $table->integer('brands_id');
              $table->string('car_model',128)->unique();
              $table->integer('car_price');
              $table->string('body_type',100);
              $table->string('transmission',100);
              $table->string('fuel',100);
              $table->integer('year');
              $table->string('engine',100);
              $table->integer('seat');
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
        Schema::dropIfExists('boverviews');
    }
}
