<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('desc');
            $table->string('size');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('location_id');
            $table->integer('product_id');
            $table->string('user_id');
            $table->mediumText('image');
            $table->mediumText('image1');
            $table->mediumText('image2')->nullable();
            $table->mediumText('image3')->nullable();
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
        Schema::dropIfExists('pictures');
    }
}
