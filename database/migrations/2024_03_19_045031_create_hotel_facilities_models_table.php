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
        Schema::create('hotel_facilities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotel')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignUuid('facilities_id');
            $table->foreign('facilities_id')->references('id')->on('facilities')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_facilities');
    }
};
