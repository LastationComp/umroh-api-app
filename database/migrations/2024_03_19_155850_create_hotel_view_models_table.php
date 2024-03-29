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
        Schema::create('hotel_view', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotel')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_view');
    }
};
