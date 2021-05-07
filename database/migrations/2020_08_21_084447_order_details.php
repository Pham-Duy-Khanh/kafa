<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('order_details')) {
            Schema::create('order_details', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('id_order');
                $table->unsignedInteger('id_product');
                $table->float('price', 16, 2);
                $table->Integer('quantity');
                $table->timestamps();
                $table->foreign('id_order')->references('id')->on('orders');
                $table->foreign('id_product')->references('id')->on('product');
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
        Schema::dropIfExists('order_details');
    }
}
