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
        Schema::create('car_addons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('price_aed');
            $table->string('price_usd');
            $table->string('car_image');
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
        Schema::dropIfExists('car_addons');
    }
};
