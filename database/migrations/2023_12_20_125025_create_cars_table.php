<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('year');
            $table->string('passager');
            $table->string('gear_shift');
            $table->string('baggage');
            $table->string('door');
            $table->string('car_detail');
            $table->string('price_aed');
            $table->string('price_usd');
            $table->integer('car_type_id');
            $table->string('car_image');
            $table->string('mileage');
            $table->string('car_color');
            $table->string('car_feature_id');
            $table->string('title');
            $table->string('meta_title');
            $table->longText('seo_content');
            $table->longText('meta_description');
            $table->integer('status')->nullable(0);
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
        Schema::dropIfExists('cars');
    }
};
