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
        Schema::create('academic_achievements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('academic_achievement', '40');
            $table->unsignedBigInteger('amount_type_id')->nullable();
            $table->foreign('amount_type_id')->references('id')->on('amount_types');
            $table->float('amount', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_achievements');
    }
};
