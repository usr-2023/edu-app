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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //unique
            $table->integer('job_number')->unique()->nullable();
            $table->string('url_address','60')->unique()->nullable();

            //foreign id and reference
            $table->unsignedBigInteger('employee_status_id')->nullable();
            $table->foreign('employee_status_id')->references('id')->on('employee_status');

            $table->unsignedBigInteger('contract_type_id')->nullable();
            $table->foreign('contract_type_id')->references('id')->on('contract_type');

            $table->unsignedBigInteger('employment_type_id')->nullable();
            $table->foreign('employment_type_id')->references('id')->on('employment_type');

            $table->unsignedBigInteger('section_id')->nullable();
            $table->foreign('section_id')->references('id')->on('section');

            $table->unsignedBigInteger('sub_section_id')->nullable();
            $table->foreign('sub_section_id')->references('id')->on('sub_section');

            $table->unsignedBigInteger('sub_sub_section_id')->nullable();
            $table->foreign('sub_sub_section_id')->references('id')->on('sub_sub_section');

            $table->unsignedBigInteger('marital_status_id')->nullable();
            $table->foreign('marital_status_id')->references('id')->on('marital_status');

            $table->unsignedBigInteger('assignment_type_id')->nullable();
            $table->foreign('assignment_type_id')->references('id')->on('assignment_type');

            $table->unsignedBigInteger('nationality_id')->nullable();
            $table->foreign('nationality_id')->references('id')->on('nationality');

            $table->unsignedBigInteger('mother_language_id')->nullable();
            $table->foreign('mother_language_id')->references('id')->on('mother_language');

            $table->unsignedBigInteger('gender_id')->nullable();
            $table->foreign('gender_id')->references('id')->on('gender');

            $table->unsignedBigInteger('scientific_title_stage_id')->nullable();
            $table->foreign('scientific_title_stage_id')->references('id')->on('scientific_title_stage');

            $table->unsignedBigInteger('job_title_id')->nullable();
            $table->foreign('job_title_id')->references('id')->on('job_title');

            $table->unsignedBigInteger('job_grade_id')->nullable();
            $table->foreign('job_grade_id')->references('id')->on('job_grade');

            $table->unsignedBigInteger('career_stage_id')->nullable();
            $table->foreign('career_stage_id')->references('id')->on('career_stage');

            $table->unsignedBigInteger('teaching_specialization_id')->nullable();
            $table->foreign('teaching_specialization_id')->references('id')->on('teaching_specialization');

            $table->unsignedBigInteger('political_dismissal_type_id')->nullable();
            $table->foreign('political_dismissal_type_id')->references('id')->on('political_dismissal_type');

            //normal fields

            $table->string('name','20')->nullable();
            $table->string('father_name','20')->nullable();
            $table->string('grandfather_name','20')->nullable();
            $table->string('fourth_grandfather_name','20')->nullable();
            $table->string('surname','20')->nullable();
            $table->string('full_name','100')->nullable();
            $table->string('mother_name','20')->nullable();
            $table->string('mother_father_name','20')->nullable();
            $table->string('mother_grandfather_name','20')->nullable();
            $table->string('mother_surname','20')->nullable();
            $table->string('mother_full_name','80')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth','20')->nullable();
            $table->string('first_husband_name','20')->nullable();
            $table->string('husband_father_name','20')->nullable();
            $table->string('husband_grandfather_name','20')->nullable();
            $table->string('husband_surname','20')->nullable();
            $table->integer('number_of_children')->nullable();
            $table->bigInteger('employee_phone_number')->nullable();
            $table->string('employee_email','50')->nullable();
            $table->integer('is_national_card')->nullable();
            $table->string('national_card_number','12')->nullable();
            $table->date('national_card_date_of_issue')->nullable();
            $table->string('national_card_issuing_authority','50')->nullable();
            $table->string('national_card_family_number','20')->nullable();
            $table->string('civil_status_identity_number','20')->nullable();
            $table->string('civil_status_registry_number','10')->nullable();
            $table->string('civil_status_newspaper_number','10')->nullable();
            $table->date('civil_status_issue_date')->nullable();
            $table->string('civil_status_issuer','50')->nullable();
            $table->string('nationality_certificate_number','20')->nullable();
            $table->string('nationality_certificate_authority_issuing','50')->nullable();
            $table->date('nationality_certificate_authority_issuing_date')->nullable();
            $table->string('nationality_certificate_authority_issuing_wallet','20')->nullable();
            $table->string('housing_card_number','20')->nullable();
            $table->date('housing_card_date_of_issue')->nullable();
            $table->string('housing_card_issuing_authority','50')->nullable();
            $table->string('housing_card_residence_address','20')->nullable();
            $table->string('housing_card_governorate','20')->nullable();
            $table->string('housing_card_district','20')->nullable();
            $table->string('housing_card_neighborhood','20')->nullable();
            $table->string('housing_card_house_number','20')->nullable();
            $table->string('housing_card_nearest_point_of_reference','30')->nullable();
            $table->string('housing_card_mukhtar_name','40')->nullable();
            $table->string('certificate_of_appointment_academic_achievement','30')->nullable();
            $table->string('certificate_of_appointment','20')->nullable();
            $table->string('certificate_of_appointment_graduation_year','9')->nullable();
            $table->string('certificate_of_appointment_university_institute_school_name','50')->nullable();
            $table->string('certificate_of_appointment_college_name','50')->nullable();
            $table->string('certificate_of_appointment_major','20')->nullable();
            $table->integer('certificate_of_appointment_mark')->nullable();
            $table->string('last_academic_achievement','20')->nullable();
            $table->string('last_certificate_obtained','20')->nullable();
            $table->string('last_year_of_graduation','9')->nullable();
            $table->string('last_name_of_the_university','30')->nullable();
            $table->string('last_university_institute_school_name','50')->nullable();
            $table->string('last_name_of_the_college','50')->nullable();
            $table->string('last_major','20')->nullable();
            $table->integer('last_certificate_of_appointment_mark')->nullable();
            $table->integer('is_scientific_title')->nullable();
            $table->date('scientific_title_date')->nullable();
            $table->date('appointment_date')->nullable();
            $table->string('appointment_ministerial_order_number','20')->nullable();
            $table->date('appointment_ministerial_order_date')->nullable();
            $table->string('appointment_administrative_order_number','20')->nullable();
            $table->date('appointment_administrative_order_date')->nullable();
            $table->string('appointment_first_initiation_number','20')->nullable();
            $table->date('appointment_first_initiation_date')->nullable();
            $table->integer('nominal_salary')->nullable();
            $table->date('job_grade_date')->nullable();
            $table->date('career_stage_date')->nullable();
            $table->integer('is_political_dismissal')->nullable();
            $table->date('political_dismissal_duration_from')->nullable();
            $table->date('political_dismissal_duration_to')->nullable();
            $table->string('political_dismissal_years','4')->nullable();
            $table->string('political_dismissal_months','2')->nullable();
            $table->string('political_dismissal_days','2')->nullable();
            $table->string('political_dismissal_order_number','20')->nullable();
            $table->date('political_dismissal_order_date')->nullable();
            $table->string('political_dismissal_reappointment_number','20')->nullable();
            $table->date('political_dismissal_date_reappointment')->nullable();
            $table->string('political_dismissal_ministerial_reappointment_number','20')->nullable();
            $table->date('political_dismissal_ministerial_reappointment_date')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
