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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('type_of_paper');
            $table->string('discipline');
            $table->string('academic_level');
            $table->string('urgency');
            $table->string('spacing');
            $table->string('paper_title')->nullable();
            $table->string('paper_details')->nullable();
            $table->integer('pages');
            $table->integer('sources');
            $table->string('format');
            $table->string('writer_preference');
            $table->string('total_price');
            $table->string('attachement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
