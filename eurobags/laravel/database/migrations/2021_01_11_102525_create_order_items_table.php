<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('price');
            $table->string('discount')->nullable()->default(null);
            $table->string('discount_price')->nullable()->default(null);
            $table->integer('qty');
            $table->string('color');
            $table->string('options')->nullable()->default(null);
            $table->integer('product_id')->unsigned(); 
            $table->integer('order_id')->unsigned(); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
