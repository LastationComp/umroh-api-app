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
        Schema::create('umroh_review', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUlid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignUuid('umroh_id');
            $table->foreign('umroh_id')->references('id')->on('umroh')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('comment');
            $table->string('star_review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umroh_review');
    }
};
