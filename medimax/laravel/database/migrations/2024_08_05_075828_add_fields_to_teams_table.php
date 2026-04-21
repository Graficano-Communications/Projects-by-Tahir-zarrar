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
        Schema::table('teams', function (Blueprint $table) {
            $table->text('slug')->nullable(); 
            $table->text('description')->nullable(); // For storing description HTML
            $table->text('detail_des')->nullable(); // For storing detail description HTML
            $table->string('icon_path')->nullable(); // For storing icon image path
            $table->string('detail_image_path')->nullable(); // For storing detail image path
            $table->string('bnf_image_path')->nullable(); // For storing benefits image path
            $table->json('bnf_tags')->nullable(); 
            $table->text('meta_title')->nullable(); 
            $table->text('meta_description')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn([
                'slug',
                'description',
                'detail_des',
                'icon_path',
                'detail_image_path',
                'bnf_image_path',
                'bnf_tags',
                'meta_title',
                'meta_description',
            ]);
        });
    }
};
