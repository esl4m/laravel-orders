<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('order_id')->unsigned()->nullable();
            $table->string('name');
            $table->integer('qnt');
            $table->integer('value');
            $table->string('category');
            $table->string('subcategory');
            $table->json('tags');
            $table->integer('collection_id');
            $table->timestamps();
        });

        // Schema::table('items', function($table) {
        //    $table->foreign('order_id')->references('id')->on('orders');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
