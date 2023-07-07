<?php

namespace App\Models\Basic\Employee;


use App\Models\Basic\Facility\Facility;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    use HasFactory;

    protected $table = 'employees';
    public function get_work_address()
    {
        return $this->hasone(Facility::class, 'id', 'work_address_id');
    }
     public function get_employee_status()
    {
        return $this->hasone(Employee_Status::class,'id','employee_status_id');
    }

    public function get_marital_status()
    {
        return $this->hasone(Marital_Status::class,'id','marital_status_id');
    }

     public function get_contract_type()
    {
        return $this->hasone(Contract_Type::class,'id','contract_type_id');
    }
    public function get_employment_type()
    {
        return $this->hasone(Employment_Type::class,'id','employment_type_id');
    }
    
    public function get_assignment_type()
    {
        return $this->hasone(Assignment_Type::class,'id','assignment_type_id');
    }
    public function get_nationality()
    {
        return $this->hasone(Nationality::class,'id','nationality_id');
    }
    public function get_mother_language()
    {
        return $this->hasone(Mother_Language::class,'id','mother_language_id');
    }
    public function get_gender()
    {
        return $this->hasone(Gender::class,'id','gender_id');
    }
    public function get_scientific_title_stage()
    {
        return $this->hasone(Scientific_Title_Stage::class,'id','scientific_title_stage_id');
    }
    public function get_job_title()
    {
        return $this->hasone(Job_Title::class,'id','job_title_id');
    }
    public function get_job_grade()
    {
    return $this->hasone(Job_Grade::class,'id','job_grade_id');
    }
    public function get_career_stage()
    {
    return $this->hasone(Career_Stage::class,'id','career_stage_id');
    }
    public function get_teaching_specialization()
    {
    return $this->hasone(Teaching_Specialization::class,'id','teaching_specialization_id');
    }
    public function get_political_dismissal_type()
    {
    return $this->hasone(Political_Dismissal_Type::class,'id','political_dismissal_type_id');
     }

    public function get_first_academic_achievement()
    {
    return $this->hasone(Academic_Achievement::class,'id','first_academic_achievement_id');
     }

    public function get_academic_achievement()
    {
    return $this->hasone(Academic_Achievement::class,'id','academic_achievement_id');
     }

     public function get_user_create()
     {
     return $this->hasone(User::class,'id','user_id_create');
      }
      public function get_user_update()
      {
      return $this->hasone(User::class,'id','user_id_update');
       }
    protected $fillable = [

        //
        'id',
        'url_address',
        'job_number',
        'user_id_create',
        'user_id_update',
        
        //foreign id and reference
        'work_address_id',
        'employee_status_id',
        'contract_type_id',
        'employment_type_id',
        'assignment_type_id',
        'nationality_id',
        'mother_language_id',
        'gender_id',
        'scientific_title_stage_id',
        'job_title_id',
        'job_grade_id',
        'career_stage_id',
        'teaching_specialization_id',
        'political_dismissal_type_id',
        'marital_status_id',
        'first_academic_achievement_id',
        'academic_achievement_id',
        
        //normal fields
        'name',
        'father_name',
        'grandfather_name',
        'fourth_grandfather_name',
        'surname',
        'full_name',
        'mother_name',
        'mother_father_name',
        'mother_grandfather_name',
        'mother_surname',
        'mother_full_name',
        'date_of_birth',
        'place_of_birth',
        'first_husband_name',
        'husband_father_name',
        'husband_grandfather_name',
        'husband_surname',
        'number_of_children',
        'employee_phone_number',
        'employee_email',
        'is_national_card',
        'national_card_number',
        'national_card_date_of_issue',
        'national_card_issuing_authority',
        'national_card_family_number',
        'civil_status_identity_number',
        'civil_status_registry_number',
        'civil_status_newspaper_number',
        'civil_status_issue_date',
        'civil_status_issuer',
        'nationality_certificate_number',
        'nationality_certificate_authority_issuing',
        'nationality_certificate_authority_issuing_date',
        'nationality_certificate_authority_issuing_wallet',
        'housing_card_number',
        'housing_card_date_of_issue',
        'housing_card_issuing_authority',
        'housing_card_residence_address',
        'housing_card_governorate',
        'housing_card_district',
        'housing_card_neighborhood',
        'housing_card_house_number',
        'housing_card_nearest_point_of_reference',
        'housing_card_mukhtar_name',
        'certificate_of_appointment',
        'certificate_of_appointment_graduation_year',
        'certificate_of_appointment_university_institute_school_name',
        'certificate_of_appointment_college_name',
        'certificate_of_appointment_major',
        'certificate_of_appointment_mark',
        'last_certificate_obtained',
        'last_year_of_graduation',
        'last_name_of_the_university',
        'last_university_institute_school_name',
        'last_name_of_the_college',
        'last_major',
        'last_certificate_of_appointment_mark',
        'is_scientific_title',
        'scientific_title_date',
        'appointment_date',
        'appointment_ministerial_order_number',
        'appointment_ministerial_order_date',
        'appointment_administrative_order_number',
        'appointment_administrative_order_date',
        'appointment_first_initiation_number',
        'appointment_first_initiation_date',
        'nominal_salary',
        'job_grade_date',
        'career_stage_date',
        'is_political_dismissal',
        'political_dismissal_duration_from',
        'political_dismissal_duration_to',
        'political_dismissal_years',
        'political_dismissal_months',
        'political_dismissal_days',
        'political_dismissal_order_number',
        'political_dismissal_order_date',
        'political_dismissal_reappointment_number',
        'political_dismissal_date_reappointment',
        'political_dismissal_ministerial_reappointment_number',
        'political_dismissal_ministerial_reappointment_date',
    ];



}
