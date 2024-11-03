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
        Schema::create('real_estate_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('article_type')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('living_rooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('surface')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('age')->nullable();
            $table->string('product_status')->nullable();
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
        Schema::dropIfExists('real_estate_details');
    }
};