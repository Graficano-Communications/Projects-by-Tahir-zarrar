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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('qoute_writer');
            $table->longtext('qoute');
            $table->longtext('description');
            $table->longtext('description1');
            $table->string('image');
            $table->string('banner_image');
             $table->string('meta_title')->nullable();       // Meta Title
            $table->text('meta_description')->nullable();   // Meta Description
            $table->integer('sequence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
