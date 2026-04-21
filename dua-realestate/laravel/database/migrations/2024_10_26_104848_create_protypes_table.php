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
        Schema::create('protypes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade'); // Foreign key to projects table
            $table->enum('type', ['1', '2'])->comment('1: Commercial, 2: Residential'); // Type enum
            $table->text('description')->nullable(); // Description field
            $table->string('image'); // Image field
            $table->integer('sequence'); // Sequence field
            $table->timestamps(); // Created at and Updated at timestamps

            // Unique constraint on project_id and type
            $table->unique(['project_id', 'type'], 'unique_project_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protypes');
    }
};
