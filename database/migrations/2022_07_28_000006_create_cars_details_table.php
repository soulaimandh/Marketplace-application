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
        Schema::create('cars_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mark');
            $table->string('model');
            $table->integer('fiscal_power')->nullable();
            $table->integer('gearbox')->nullable();
            $table->integer('doors_number')->nullable();
            $table->enum('first_hand', [1, 0])->nullable();
            $table->string('fuel')->nullable();
            $table->integer('year')->nullable();
            $table->integer('meliage')->nullable();
            $table->string('origin')->nullable();
            $table->string('product_status')->nullable();
            $table->enum('exchange', [1, 0])->nullable();
            $table->text('added_tags')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars_details');
    }
};