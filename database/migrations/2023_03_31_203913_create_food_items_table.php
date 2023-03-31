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
        Schema::create('food_items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->nullable(true);
            $table->double('price');
            $table->string('description');
            $table->unsignedBigInteger('cuisine');
            $table->unsignedBigInteger('rest_id');
            $table->foreign('rest_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->foreign('cuisine')->references('id')->on('cuisines')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_items');
    }
};
