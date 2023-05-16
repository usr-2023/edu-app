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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //Unique 
            $table->bigInteger('school_id')->unique()->nullable();
            $table->string('url_address', '60')->unique()->nullable();

            //Foreign id and reference
            $table->unsignedBigInteger('school_property_id')->nullable();
            $table->foreign('school_property_id')->references('id')->on('school_properties');

            $table->unsignedBigInteger('duality_id')->nullable();
            $table->foreign('duality_id')->references('id')->on('dualities');

            $table->unsignedBigInteger('school_invironment_id')->nullable();
            $table->foreign('school_invironment_id')->references('id')->on('school_invironments');

            $table->unsignedBigInteger('school_time_id')->nullable();
            $table->foreign('school_time_id')->references('id')->on('school_times');

            $table->unsignedBigInteger('school_gender_id')->nullable();
            $table->foreign('school_gender_id')->references('id')->on('school_genders');

            $table->unsignedBigInteger('school_stage_id')->nullable();
            $table->foreign('school_stage_id')->references('id')->on('school_stages');

            $table->unsignedBigInteger('main_section_id')->nullable();
            $table->foreign('main_section_id')->references('id')->on('main_sections');

            $table->unsignedBigInteger('province_id')->nullable();
            $table->foreign('province_id')->references('id')->on('provinces');

            //Normal fields
            $table->bigInteger('counting_number')->nullable();
            $table->string('current_name')->nullable();
            $table->integer('is_main_school')->nullable();
            $table->string('guest_school')->nullable();
            $table->integer('personale_design_number')->nullable();
            $table->bigInteger('male_pupils_number')->nullable();
            $table->bigInteger('female_pupils_number')->nullable();
            $table->integer('occupied_rooms_number')->nullable();
            $table->integer('filed_classes_number')->nullable();
            $table->integer('is_special_education')->nullable();
            $table->bigInteger('desks_number')->nullable();
            $table->integer('is_computer_available')->nullable();
            $table->integer('is_teaching_computer')->nullable();
            $table->integer('is_teaching_other_languages')->nullable();
            $table->integer('is_there_airconditions')->nullable();
            $table->integer('is_electronic_classes')->nullable();
            $table->integer('classrooms_number')->nullable();
            $table->integer('halls_count')->nullable();
            $table->integer('is_predicated')->nullable();
            $table->integer('established_year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
