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
        Schema::create('phones_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mark');
            $table->string('model');
            $table->integer('ram')->nullable();
            $table->integer('storage')->nullable();
            $table->string('screen_size')->nullable();
            $table->string('battery')->nullable();
            $table->integer('fast_charge')->nullable();
            $table->integer('back_camera')->nullable();
            $table->integer('front_camera')->nullable();
            $table->string('product_status')->nullable();
            $table->enum('exchange', [1, 0])->nullable();
            $table->integer('delivery')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phones_details');
    }
};