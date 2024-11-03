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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('transaction_type', [1, 0])->nullable();
            $table->string('city')->nullable();
            $table->string('type')->nullable();
            $table->string('sector')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->float('price')->nullable();
            $table->float('faster_price')->nullable();
            $table->longText('content')->nullable();
            $table->string('tags')->nullable();
            $table->string('added_options')->nullable();
            $table->string('images')->nullable();
            $table->string('delivery')->nullable();
            $table->string('admin_tag')->nullable();
            $table->enum('status', [1, 0])->nullable();
            $table->enum('display_phone_status', [1, 0])->nullable();
            $table->unsignedInteger('shop_id')->nullable();
            $table->unsignedInteger('vendor_id')->nullable();
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('product_details_id')->nullable();
            $table->dateTime('starts_at')->nullable();
            $table->dateTime('ends_at')->nullable();
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('cascade');

            $table->foreign('vendor_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};