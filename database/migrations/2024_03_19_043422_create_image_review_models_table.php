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
        Schema::create('image_review', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('umroh_review_id');
            $table->foreign('umroh_review_id')->references('id')->on('umroh_review')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('img_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_review');
    }
};
