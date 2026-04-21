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
        Schema::create('paymentplans', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('plan_name'); // Name of the plan
            $table->string('plan_image'); // Path to the uploaded image
            $table->foreignId('project_id')->constrained()->onDelete('cascade'); // Foreign key for projects
            $table->foreignId('protype_id')->constrained()->onDelete('cascade'); // Foreign key for types
            $table->string('short_description'); // Short description
            $table->text('large_description'); // Large description
            $table->json('specifications')->nullable(); // JSON column for specifications
            $table->integer('sequence')->nullable(); // Sequence column for ordering
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paymentplans');
    }
};
