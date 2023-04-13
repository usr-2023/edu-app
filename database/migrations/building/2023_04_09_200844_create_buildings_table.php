S<?php

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
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //unique
            $table->integer('Building_reference')->unique()->nullable();
            $table->string('url_address','60')->unique()->nullable();


             //foreign id and reference

            $table->unsignedBigInteger('Building_Type_id')->nullable();
            $table->foreign('Building_Type_id')->references('id')->on('Building_Type');

            $table->unsignedBigInteger('Building_Status_id')->nullable();
            $table->foreign('Building_Status_id')->references('id')->on('Building_Status');
/* 
            $table->unsignedBigInteger('Last_School_id')->nullable();
            $table->foreign('Last_School_id')->references('id')->on('Schools');
 */


            $table->string('city',10)->nullable();
            $table->string('district',10)->nullable();
            $table->string('quarter',10)->nullable();
            $table->string('latitude',16)->nullable();
            $table->string('longitude',16)->nullable();
            $table->integer('Class_count')->nullable();
            $table->integer('Hall_count')->nullable();
            $table->integer('Floor_count')->nullable();
            $table->integer('Sanitary_Units_count')->nullable();
            $table->integer('Lab_count')->nullable();
            $table->integer('School_Length')->nullable();
            $table->integer('School_Width')->nullable();
            $table->integer('Building_Area')->nullable();
            $table->integer('Building_Year')->nullable();
            $table->integer('is_Extend_Area')->nullable();
            $table->integer('is_Sport_Area')->nullable();
            $table->integer('is_Garden_Area')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buildings');
    }
};
