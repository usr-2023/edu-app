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


            $table->string('city',10);
            $table->string('district',10);
            $table->string('quarter',10);
            $table->string('latitude',10);
            $table->string('longitude',10);
            $table->integer('Class_count');
            $table->integer('Hall_count');
            $table->integer('Floor_count');
            $table->integer('SanitaryUnits_count');
            $table->integer('Lab_count');
            $table->integer('SchoolLength');
            $table->integer('SchoolWidth');
            $table->integer('BuildingArea');
            $table->integer('BuildingYear');
            $table->integer('ExtendArea');
            $table->integer('SportArea');
            $table->integer('GardenArea');
            
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
