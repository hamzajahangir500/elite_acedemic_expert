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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->integer('theme_id');
            $table->integer('status');
            $table->string('title');
            $table->integer('author_id');
            $table->string('slug');
            $table->string('content');
            $table->string('image');
            $table->string('meta_title');
            $table->string('tag');
            $table->string('meta_description');
            $table->string('focus_keyphrase');
            $table->string('schema');
            $table->integer('total_clicks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
