<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); // Category relationship
            $table->foreignId('subcategory_id')->constrained('subcategories')->onDelete('cascade');
            $table->string('name'); // Service Name
            $table->string('sku');
            $table->string('tags');
            $table->string('slug')->unique(); // Slug (no after() here)
            $table->text('description'); // Service Description
            $table->text('description2');
            $table->json('service_images');
            $table->string('meta_title')->nullable();       // Meta Title
            $table->text('meta_description')->nullable();   // Meta Description
            $table->string('image_alt_text')->nullable();   // Single Image Alt Text
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
