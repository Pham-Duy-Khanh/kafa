<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Store extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('store')) {
            Schema::create('store', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('id_storecate');
                $table->string('name', 255)->unique();
                $table->string('slug', 255)->unique();
                $table->string('image');
                $table->tinyInteger('status');
                $table->timestamps();
                $table->foreign('id_storecate')->references('id')->on('store');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store');
    }
}
