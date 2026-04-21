<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Service Name
            $table->string('first_heading'); // Service 1st Heading
            $table->text('detailing')->nullable();
            $table->string('service_image');
            $table->text('description'); // Service Description
            $table->timestamps();
        });

        Schema::create('service_characteristics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->string('heading');
            $table->text('detail');
            $table->string('image'); // Store image path
            $table->timestamps();
        });

        Schema::create('service_faqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->string('question');
            $table->text('answer');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('service_faqs');
        Schema::dropIfExists('service_characteristics');
        Schema::dropIfExists('services');
    }
};
