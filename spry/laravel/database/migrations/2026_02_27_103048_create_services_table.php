<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {

            $table->id();

            // Foreign Keys
            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->onDelete('cascade');

            $table->foreignId('subcategory_id')
                  ->constrained('subcategories')
                  ->onDelete('cascade');

            // Basic Fields
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku');
            $table->string('tags');

            // Description
            $table->text('description');
            $table->text('description2');

            // Images
            $table->json('service_images');

            // Featured Field (0 = Not Featured, 1 = Featured)
            $table->boolean('is_featured')->default(0);

            // SEO Fields
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // Image Alt Text
            $table->string('image_alt')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};