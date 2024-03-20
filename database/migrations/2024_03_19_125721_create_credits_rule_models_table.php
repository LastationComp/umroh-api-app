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
        Schema::create('credits_rule', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('umroh_id');
            $table->foreign('umroh_id')->references('id')->on('umroh')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignUuid('credit_id');
            $table->foreign('credit_id')->references('id')->on('credits')->cascadeOnDelete()->cascadeOnUpdate();
            $table->bigInteger('dp');
            $table->boolean('is_syariah');
            $table->decimal('admin_fee', 9, 3);
            $table->decimal('insurance', 9, 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credits_rule');
    }
};
