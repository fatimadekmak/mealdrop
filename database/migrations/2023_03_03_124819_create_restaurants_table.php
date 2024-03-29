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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('image')->nullable(true);
            $table->string('address');
            $table->string('phone');
            $table->unsignedBigInteger('cuisine');
            $table->string('opening_time');
            $table->foreign('cuisine')->references('id')->on('cuisines')->onDelete('cascade');
            $table->timestamps();
            $table->integer('active')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
