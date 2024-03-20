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
        Schema::create('umroh_facilities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('umroh_id');
            $table->foreign('umroh_id')->references('id')->on('umroh')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('type');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umroh_facilities');
    }
};
