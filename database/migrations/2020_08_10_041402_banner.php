<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Banner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('banner')) {
            Schema::create('banner', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255)->unique();
                $table->string('slug', 255)->unique();
                $table->string('image');
                $table->string('content');
                $table->tinyInteger('status');
                $table->timestamps();
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
        Schema::dropIfExists('banner');
    }
}
