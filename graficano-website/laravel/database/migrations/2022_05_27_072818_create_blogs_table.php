<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->string('banner');
            $table->longText('description');
            $table->string('writer_name');
            $table->string('avatar_photo')->nullable()->after('writer_name');
            $table->string('meta_title')->nullable()->default(null);
            $table->text('meta_description')->nullable()->default(null);
            $table->text('meta_tags')->nullable()->default(null);

            $table->integer('sequence');
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
        Schema::dropIfExists('blogs');
    }
}
