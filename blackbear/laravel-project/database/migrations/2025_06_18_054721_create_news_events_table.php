<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('news_events', function (Blueprint $table) {
        $table->id();
        $table->string('caption');
        $table->string('date'); // Can be changed to `date()` type if it's a proper date
        $table->string('location');
        $table->text('description')->nullable();
        $table->string('image'); // Store filename or path
        $table->integer('sequence')->nullable(); // Optional, if sorting is needed
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_events');
    }
};
