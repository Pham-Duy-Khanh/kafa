<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('product')) {
            Schema::create('product', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('id_category');
                $table->string('name', 255)->unique();
                $table->string('slug', 255)->unique();
                $table->string('image');
                $table->float('price');
                $table->float('discount')->nullable();
                $table->Integer('quantity')->nullable();
                $table->tinyInteger('status');
                $table->string('desscaption');
                $table->timestamps();
                $table->foreign('id_category')->references('id')->on('product');
            });
        }
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
