<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_order_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('production_order_id');
            $table->string('product_name');
            $table->boolean('product_emergency');
            $table->json('photography_type');
            $table->string('background');
            $table->string('canvas_size');
            $table->string('sample_picking');
            $table->integer('angle_image_count');
            $table->string('product_image');
            $table->json('product_angle_images');
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
        Schema::dropIfExists('product_order_products');
    }
}
