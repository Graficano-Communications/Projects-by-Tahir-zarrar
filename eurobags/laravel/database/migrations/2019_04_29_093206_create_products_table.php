<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('slug');
            $table->longText('description');
            $table->longText('features')->nullable()->default(null);
            $table->longText('terms_conditions')->nullable()->default(null);
            $table->string('size_chart')->nullable()->default(null); //image
            $table->string('video')->nullable()->default(null); //image

            $table->float('price' ,10, 2);  
            $table->float('sale_price' ,10, 2)->nullable()->default(null);

            $table->integer('qty');
    
            $table->boolean('track_stock');
            $table->boolean('taxable');
            $table->boolean('favourite');
            $table->boolean('new_arrival');
            $table->boolean('status'); //enabled or disabled

             
            $table->longText('related_products')->nullable()->default(null);;

            $table->integer('category_id')->unsigned(); 
            $table->integer('sub_category_id')->unsigned();

            $table->text('meta_title')->nullable()->default(null);;
            $table->text('meta_description')->nullable()->default(null);; 

            $table->integer('sequence');
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
