<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('item_order', function (Blueprint $table) {
//            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->integer('quantity')->unsigned()->nullable();
//            $table->primary(['order_id', 'item_id']);

//            $table->foreign('item_id')
//                ->references('id')->on('items')
//                ->onDelete('cascade');
//
//            $table->foreign('order_id')
//                ->references('id')->on('orders')
//                ->onDelete('cascade');


//            $table->foreign('item_id')->references('id')->on('items');
//            $table->foreign('order_id')->references('id')->on('orders');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_order');
    }
}