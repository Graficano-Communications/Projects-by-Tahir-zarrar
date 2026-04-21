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
        Schema::table('amenities', function (Blueprint $table) {
            $table->date('date')->nullable(); // Adding a nullable 'date' field
        });
    }
    
    public function down(): void
    {
        Schema::table('amenities', function (Blueprint $table) {
            $table->dropColumn('date'); // Dropping the 'date' field
        });
    }
    
};
