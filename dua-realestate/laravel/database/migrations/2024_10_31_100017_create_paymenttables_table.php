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
        Schema::create('paymenttables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('paymentplan_id')->unsigned(); // Foreign key to paymentplans
            $table->string('plan_name'); // Name of the plan
            $table->string('plan_image'); // Path to the uploaded image
            $table->json('specifications')->nullable(); // Store specifications as JSON
            $table->integer('sequence')->nullable(); // Sequence order
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('paymentplan_id')->references('id')->on('paymentplans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paymenttables');
    }
};
