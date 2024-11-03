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
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->Text('title');
            $table->Text('slug');
            $table->Text('content');
            $table->Text('tags')->nullable();
            $table->Text('identifiant')->nullable();
            $table->integer('likes')->default(0);
            $table->integer('views')->default(0);
            $table->unsignedInteger('category_id');
            $table->unsignedBigInteger('users_id');
            $table->timestamps();



            // relations
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->foreign('users_id')
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
        Schema::dropIfExists('questions');
    }
};