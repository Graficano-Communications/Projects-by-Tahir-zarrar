<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('subcategory_id')->constrained('subcategories')->onDelete('cascade');
            $table->string('product_name');
            $table->string('slug')->unique()->after('product_name');
            $table->string('meta_title')->nullable()->after('slug');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->longText('product_description')->nullable()->after('meta_description');
            $table->json('product_images')->nullable()->after('product_description'); // To store multiple images as JSON
            $table->timestamps();
        });

        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('name');
            $table->string('size');
            $table->string('finish');
            $table->string('code');
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
        Schema::dropIfExists('product_variations');
        Schema::dropIfExists('products');
    }
}
