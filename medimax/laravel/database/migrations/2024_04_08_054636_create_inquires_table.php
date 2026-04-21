<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquires', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('name');
            $table->string('sequence');
            $table->string('quantity');
            $table->string('email');
            $table->string('phone');
            $table->text('message');
            $table->enum('status', ['pending', 'dispatch','completed'])->default('pending');
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
        Schema::dropIfExists('inquires');
    }
};
