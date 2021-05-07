<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('id_user');
                $table->float('total_price', 16, 2);
                $table->string('address');
                $table->string('note')->nullable();
                $table->tinyInteger('status')->default(1)->comment('1 là Hiện, 0 là Ẩn');
                $table->timestamps();
                $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('orders');
    }
}
