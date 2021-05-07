<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Storecate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('storecate')) {
            Schema::create('storecate', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255)->unique();
                $table->string('slug', 255)->unique();
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
        Schema::dropIfExists('storecate');
    }
}
