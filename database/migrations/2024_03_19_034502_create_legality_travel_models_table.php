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
        Schema::create('legality_travel', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUlid('travel_id');
            $table->foreign('travel_id')->references('id')->on('travel')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('legality_number');
            $table->string('credentials');
            $table->string('state');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legality_travel');
    }
};
