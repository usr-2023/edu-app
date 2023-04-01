<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeeDataTable;
use App\Models\Assignment_Type;
use App\Models\Career_Stage;
use App\Models\Contract_Type;
use App\Models\Employee;
use App\Models\Employee_Status;
use App\Models\Employment_Type;
use App\Models\Gender;
use App\Models\Job_Grade;
use App\Models\Job_Title;
use App\Models\Marital_Status;
use App\Models\Mother_Language;
use App\Models\Nationality;
use App\Models\Political_Dismissal_Type;
use App\Models\Scientific_Title_Stage;
use App\Models\Section;
use App\Models\Sub_Section;
use App\Models\Sub_Sub_Section;
use App\Models\Teaching_Specialization;
use App\Models\YesNo;
use Illuminate\Http\Request;




class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(EmployeeDataTable $dataTable)
    {
       return $dataTable->render('employee.index');
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // get data from the database and send it to employee.create view to use in <select> <options>
        
        $contract_types = Contract_Type::all();
        $employee_statuss = Employee_Status::all();
        $employment_types = Employment_Type::all();
        $sections = Section::all();
        $sub_sections = Sub_Section::all();
        $sub_sub_sections = Sub_Sub_Section::all();
        $assignment_types = Assignment_Type::all();
        $nationalitys = Nationality::all();
        $mother_languages = Mother_Language::all();
        $genders = Gender::all();
        $scientific_title_stages = Scientific_Title_Stage::all();
        $job_titles = Job_Title::all();
        $job_grades = Job_Grade::all();
        $career_stages = Career_Stage::all();
        $teaching_specializations = Teaching_Specialization::all();
        $political_dismissal_types = Political_Dismissal_Type::all();
        $marital_statuss = Marital_Status::all();
        $yesnos = YesNo::all();


       

        return view('employee.create',compact(['contract_types','employee_statuss','employment_types','sections','sub_sections','sub_sub_sections','assignment_types','nationalitys','mother_languages','genders','scientific_title_stages','job_titles','job_grades','career_stages','teaching_specializations','political_dismissal_types','marital_statuss','yesnos']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate user input 

        $request->validate([
        
        'job_number' => ['required','unique:'.Employee::class , 'digits:9'],
        
        //foreign id and reference
        'employee_status_id' => ['required','max:2'],
        'contract_type_id' => ['required','max:2'],
        'employment_type_id' => ['required','max:2'],
        'section_id' => ['required','max:2'],
        'sub_section_id' => ['required','max:2'],
        'sub_sub_section_id' => ['required','max:2'],
        'assignment_type_id' => ['required','max:2'],
        'nationality_id' => ['required','max:2'],
        'mother_language_id' => ['required','max:2'],
        'gender_id' => ['required','max:2'],
        'scientific_title_stage_id' => ['required','max:2'],
        'job_title_id' => ['required','max:2'],
        'job_grade_id' => ['required','max:2'],
        'career_stage_id' => ['required','max:2'],
        'teaching_specialization_id' => ['required','max:2'],
        'political_dismissal_type_id' => ['required','max:2'],
        'marital_status_id' => ['required','max:2'],

        //normal fields
        'name' => ['required','max:20'],
        'father_name' => ['required','max:20'],
        'grandfather_name' => ['required','max:20'],
        'fourth_grandfather_name' => ['max:20'],
        'surname' => ['max:20'],
        
        'mother_name' => ['max:20'],
        'mother_father_name' => ['max:20'],
        'mother_grandfather_name' => ['max:20'],
        'mother_surname' => ['max:20'],
        'place_of_birth' => ['max:20'],
        'first_husband_name' => ['max:20'],
        'husband_father_name' => ['max:20'],
        'husband_grandfather_name' => ['max:20'],
        'husband_surname' => ['max:20'],
        'number_of_children' => ['max:2'],
        'employee_phone_number' => ['max:16'],
        'employee_email' => ['max:50'],
        'is_national_card' => ['max:1'],
        'national_card_number' => ['max:12'],
        'national_card_date_of_issue' => ['nullable','date'],
        'national_card_issuing_authority' => ['max:50'],
        'national_card_family_number' => ['max:20'],
        'civil_status_identity_number' => ['max:20'],
        'civil_status_registry_number' => ['max:20'],
        'civil_status_newspaper_number' => ['max:20'],
        'civil_status_issue_date' => ['nullable','date'],
        'civil_status_issuer' => ['max:50'],
        'nationality_certificate_number' => ['max:20'],
        'nationality_certificate_authority_issuing' => ['max:50'],
        'nationality_certificate_authority_issuing_date' => ['nullable','date'],
        'nationality_certificate_authority_issuing_wallet' => ['max:20'],
        'housing_card_number' => ['max:20'],
        'housing_card_date_of_issue' => ['nullable','date'],
        'housing_card_issuing_authority' => ['max:50'],
        'housing_card_residence_address' => ['max:20'],
        'housing_card_governorate' => ['max:20'],
        'housing_card_district' => ['max:20'],
        'housing_card_neighborhood' => ['max:20'],
        'housing_card_house_number' => ['max:20'],
        'housing_card_nearest_point_of_reference' => ['max:30'],
        'housing_card_mukhtar_name' => ['max:20'],
        'certificate_of_appointment_academic_achievement' => ['max:20'],
        'certificate_of_appointment' => ['max:20'],
        'certificate_of_appointment_graduation_year' => ['max:9'],
        'certificate_of_appointment_university_institute_school_name' => ['max:50'],
        'certificate_of_appointment_college_name' => ['max:50'],
        'certificate_of_appointment_major' => ['max:20'],
        'certificate_of_appointment_mark' => ['max:3'],
        'last_academic_achievement' => ['max:20'],
        'last_certificate_obtained' => ['max:20'],
        'last_year_of_graduation' => ['max:9'],
        'last_name_of_the_university' => ['max:30'],
        'last_university_institute_school_name' => ['max:50'],
        'last_name_of_the_college' => ['max:50'],
        'last_major' => ['max:20'],
        'last_certificate_of_appointment_mark' => ['max:3'],
        'is_scientific_title' => ['max:1'],
        'scientific_title_date' => ['nullable','date'],
        'appointment_date' => ['nullable','date'],
        'appointment_ministerial_order_number' => ['max:20'],
        'appointment_ministerial_order_date' => ['nullable','date'],
        'appointment_administrative_order_number' => ['max:20'],
        'appointment_administrative_order_date' => ['nullable','date'],
        'appointment_first_initiation_number' => ['max:20'],
        'appointment_first_initiation_date' => ['nullable','date'],
        'nominal_salary' => ['max:7'],
        'job_grade_date' => ['nullable','date'],
        'career_stage_date' => ['nullable','date'],
        'is_political_dismissal' => ['max:1'],
        'political_dismissal_duration_from' => ['nullable','date'],
        'political_dismissal_duration_to' => ['nullable','date'],
        'political_dismissal_years' => ['max:2'],
        'political_dismissal_months' => ['max:2'],
        'political_dismissal_days' => ['max:2'],
        'political_dismissal_order_number' => ['max:20'],
        'political_dismissal_order_date' => ['nullable','date'],
        'political_dismissal_reappointment_number' => ['max:20'],
        'political_dismissal_date_reappointment' => ['nullable','date'],
        'political_dismissal_ministerial_reappointment_number' => ['max:20'],
        'political_dismissal_ministerial_reappointment_date' => ['nullable','date'],
            
        ]);

        // insert the user input into model and lareval insert it into the database.
        $employee = Employee::create([

        //generate new url_address using random text function.
        'url_address' => $this->get_random_string(60),

        //foreign id and reference
        'employee_status_id' => $request->employee_status_id ,
        'contract_type_id' => $request->contract_type_id ,
        'employment_type_id' => $request->employment_type_id ,
        'section_id' => $request->section_id ,
        'sub_section_id' => $request->sub_section_id,
        'sub_sub_section_id' => $request->sub_sub_section_id,
        'assignment_type_id' => $request->assignment_type_id,
        'nationality_id' => $request->nationality_id,
        'mother_language_id' => $request->mother_language_id,
        'gender_id' => $request->gender_id,
        'scientific_title_stage_id' => $request->scientific_title_stage_id,
        'job_title_id' => $request->job_title_id,
        'job_grade_id' => $request->job_grade_id,
        'career_stage_id' => $request->career_stage_id,
        'teaching_specialization_id' => $request->teaching_specialization_id,
        'political_dismissal_type_id' => $request->political_dismissal_type_id,
        'marital_status_id' => $request->marital_status_id,

        //normal fields
        'job_number' => $request->job_number,
        'name' => $request->name,
        'father_name' => $request->father_name,
        'grandfather_name' => $request->grandfather_name,
        'fourth_grandfather_name' => $request->fourth_grandfather_name,
        'surname' => $request->surname,
        'full_name' => $request->full_name,
        'mother_name' => $request->mother_name,
        'mother_father_name' => $request->mother_father_name,
        'mother_grandfather_name' => $request->mother_grandfather_name,
        'mother_surname' => $request->mother_surname,
        'mother_full_name' => $request->mother_full_name,
        'place_of_birth' => $request->place_of_birth,
        'first_husband_name' => $request->first_husband_name,
        'husband_father_name' => $request->husband_father_name,
        'husband_grandfather_name' => $request->husband_grandfather_name,
        'husband_surname' => $request->husband_surname,
        'number_of_children' => $request->number_of_children,
        'employee_phone_number' => $request->employee_phone_number,
        'employee_email' => $request->employee_email,
        'is_national_card' => $request->is_national_card,
        'national_card_number' => $request->national_card_number,
        'national_card_issuing_authority' => $request->national_card_issuing_authority,
        'national_card_family_number' => $request->national_card_family_number,
        'civil_status_identity_number' => $request->civil_status_identity_number,
        'civil_status_registry_number' => $request->civil_status_registry_number,
        'civil_status_newspaper_number' => $request->civil_status_newspaper_number,
        'civil_status_issuer' => $request->civil_status_issuer,
        'nationality_certificate_number' => $request->nationality_certificate_number,
        'nationality_certificate_authority_issuing' => $request->nationality_certificate_authority_issuing,
        'nationality_certificate_authority_issuing_wallet' => $request->nationality_certificate_authority_issuing_wallet,
        'housing_card_number' => $request->housing_card_number,
        'housing_card_issuing_authority' => $request->housing_card_issuing_authority,
        'housing_card_residence_address' => $request->housing_card_residence_address,
        'housing_card_governorate' => $request->housing_card_governorate,
        'housing_card_district' => $request->housing_card_district,
        'housing_card_neighborhood' => $request->housing_card_neighborhood,
        'housing_card_house_number' => $request->housing_card_house_number,
        'housing_card_nearest_point_of_reference' => $request->housing_card_nearest_point_of_reference,
        'housing_card_mukhtar_name' => $request->housing_card_mukhtar_name,
        'certificate_of_appointment_academic_achievement' => $request->certificate_of_appointment_academic_achievement,
        'certificate_of_appointment' => $request->certificate_of_appointment,
        'certificate_of_appointment_graduation_year' => $request->certificate_of_appointment_graduation_year,
        'certificate_of_appointment_university_institute_school_name' => $request->certificate_of_appointment_university_institute_school_name,
        'certificate_of_appointment_college_name' => $request->certificate_of_appointment_college_name,
        'certificate_of_appointment_major' => $request->certificate_of_appointment_major,
        'certificate_of_appointment_mark' => $request->certificate_of_appointment_mark,
        'last_academic_achievement' => $request->last_academic_achievement,
        'last_certificate_obtained' => $request->last_certificate_obtained,
        'last_year_of_graduation' => $request->last_year_of_graduation,
        'last_name_of_the_university' => $request->last_name_of_the_university,
        'last_university_institute_school_name' => $request->last_university_institute_school_name,
        'last_name_of_the_college' => $request->last_name_of_the_college,
        'last_major' => $request->last_major,
        'last_certificate_of_appointment_mark' => $request->last_certificate_of_appointment_mark,
        'is_scientific_title' => $request->is_scientific_title,
        'appointment_ministerial_order_number' => $request->appointment_ministerial_order_number,
        'appointment_administrative_order_number' => $request->appointment_administrative_order_number,
        'appointment_first_initiation_number' => $request->appointment_first_initiation_number,
        'nominal_salary' => $request->nominal_salary,
        'is_political_dismissal' => $request->is_political_dismissal,
        'political_dismissal_years' => $request->political_dismissal_years,
        'political_dismissal_months' => $request->political_dismissal_months,
        'political_dismissal_days' => $request->political_dismissal_days,
        'political_dismissal_order_number' => $request->political_dismissal_order_number,
        'political_dismissal_reappointment_number' => $request->political_dismissal_reappointment_number,
        'political_dismissal_ministerial_reappointment_number' => $request->political_dismissal_ministerial_reappointment_number,
        
        // dates
        'date_of_birth' => (checkdate($request->date_of_birth_m,$request->date_of_birth_d,$request->date_of_birth_y)) ? $request->date_of_birth_y.'-'.$request->date_of_birth_m.'-'.$request->date_of_birth_d : null ,
        'national_card_date_of_issue' =>(checkdate($request->national_card_date_of_issue_m,$request->national_card_date_of_issue_d,$request->national_card_date_of_issue_y)) ? $request->national_card_date_of_issue_y.'-'.$request->national_card_date_of_issue_m.'-'.$request->national_card_date_of_issue_d : null ,
        'civil_status_issue_date' =>(checkdate($request->civil_status_issue_date_m,$request->civil_status_issue_date_d,$request->civil_status_issue_date_y)) ? $request->civil_status_issue_date_y.'-'.$request->civil_status_issue_date_m.'-'.$request->civil_status_issue_date_d : null,
        'nationality_certificate_authority_issuing_date' => (checkdate($request->nationality_certificate_authority_issuing_date_m,$request->nationality_certificate_authority_issuing_date_d,$request->nationality_certificate_authority_issuing_date_y)) ? $request->nationality_certificate_authority_issuing_date_y.'-'.$request->nationality_certificate_authority_issuing_date_m.'-'.$request->nationality_certificate_authority_issuing_date_d : null,
        'housing_card_date_of_issue' => (checkdate($request->housing_card_date_of_issue_m,$request->housing_card_date_of_issue_d,$request->housing_card_date_of_issue_y)) ? $request->housing_card_date_of_issue_y.'-'.$request->housing_card_date_of_issue_m.'-'.$request->housing_card_date_of_issue_d : null,
        'scientific_title_date' => (checkdate($request->scientific_title_date_m,$request->scientific_title_date_d,$request->scientific_title_date_y))? $request->scientific_title_date_y.'-'.$request->scientific_title_date_m.'-'.$request->scientific_title_date_d :null,
        'appointment_date' =>(checkdate($request->appointment_date_m,$request->appointment_date_d,$request->appointment_date_y))? $request->appointment_date_y.'-'.$request->appointment_date_m.'-'.$request->appointment_date_d:null,
        'appointment_ministerial_order_date' =>(checkdate($request->appointment_ministerial_order_date_m,$request->appointment_ministerial_order_date_d,$request->appointment_ministerial_order_date_y))? $request->appointment_ministerial_order_date_y.'-'.$request->appointment_ministerial_order_date_m.'-'.$request->appointment_ministerial_order_date_d:null,
        'appointment_administrative_order_date' =>(checkdate($request->appointment_administrative_order_date_m,$request->appointment_administrative_order_date_d,$request->appointment_administrative_order_date_y))? $request->appointment_administrative_order_date_y.'-'.$request->appointment_administrative_order_date_m.'-'.$request->appointment_administrative_order_date_d:null,
        'appointment_first_initiation_date' =>(checkdate($request->appointment_first_initiation_date_m,$request->appointment_first_initiation_date_d,$request->appointment_first_initiation_date_y))? $request->appointment_first_initiation_date_y.'-'.$request->appointment_first_initiation_date_m.'-'.$request->appointment_first_initiation_date_d:null,
        'job_grade_date' =>(checkdate($request->job_grade_date_m,$request->job_grade_date_d,$request->job_grade_date_y))? $request->job_grade_date_y.'-'.$request->job_grade_date_m.'-'.$request->job_grade_date_d:null,
        'career_stage_date' =>(checkdate($request->career_stage_date_m,$request->career_stage_date_d,$request->career_stage_date_y))? $request->career_stage_date_y.'-'.$request->career_stage_date_m.'-'.$request->career_stage_date_d:null,
        'political_dismissal_duration_from' =>(checkdate($request->political_dismissal_duration_from_m,$request->political_dismissal_duration_from_d,$request->political_dismissal_duration_from_y))? $request->political_dismissal_duration_from_y.'-'.$request->political_dismissal_duration_from_m.'-'.$request->political_dismissal_duration_from_d:null,
        'political_dismissal_duration_to' =>(checkdate($request->political_dismissal_duration_to_m,$request->political_dismissal_duration_to_d,$request->political_dismissal_duration_to_y))? $request->political_dismissal_duration_to_y.'-'.$request->political_dismissal_duration_to_m.'-'.$request->political_dismissal_duration_to_d:null,
        'political_dismissal_order_date' =>(checkdate($request->political_dismissal_order_date_m,$request->political_dismissal_order_date_d,$request->political_dismissal_order_date_y))? $request->political_dismissal_order_date_y.'-'.$request->political_dismissal_order_date_m.'-'.$request->political_dismissal_order_date_d:null,
        'political_dismissal_date_reappointment' =>(checkdate($request->political_dismissal_date_reappointment_m,$request->political_dismissal_date_reappointment_d,$request->political_dismissal_date_reappointment_y))? $request->political_dismissal_date_reappointment_y.'-'.$request->political_dismissal_date_reappointment_m.'-'.$request->political_dismissal_date_reappointment_d:null,
        'political_dismissal_ministerial_reappointment_date' =>(checkdate($request->political_dismissal_ministerial_reappointment_date_m,$request->political_dismissal_ministerial_reappointment_date_d,$request->political_dismissal_ministerial_reappointment_date_y))? $request->political_dismissal_ministerial_reappointment_date_y.'-'.$request->political_dismissal_ministerial_reappointment_date_m.'-'.$request->political_dismissal_ministerial_reappointment_date_d:null,
 

        ]);
   
        //inform the user 
        return redirect()->route('employee.index')
                        ->with('success','تمت أضافة الموظف بنجاح ');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $url_address)
    {
        $employee = Employee::where('url_address','=',$url_address) -> first();
        if (isset($employee)) {
            return view('employee.show', compact('employee'));
        }
        else{
            $ip = $this->getIPAddress();
             return view('employee.accessdenied' , ['ip'=>$ip]);
        }
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $url_address)
    {
        //
        $employee = Employee::where('url_address',$url_address) -> first();
         // get data from the database and send it to employee.create view to use in <select> <options>
         $contract_types = Contract_Type::all();
         $employee_statuss = Employee_Status::all();
         $employment_types = Employment_Type::all();
         $sections = Section::all();
         $sub_sections = Sub_Section::all();
         $sub_sub_sections = Sub_Sub_Section::all();
         $assignment_types = Assignment_Type::all();
         $nationalitys = Nationality::all();
         $mother_languages = Mother_Language::all();
         $genders = Gender::all();
         $scientific_title_stages = Scientific_Title_Stage::all();
         $job_titles = Job_Title::all();
         $job_grades = Job_Grade::all();
         $career_stages = Career_Stage::all();
         $teaching_specializations = Teaching_Specialization::all();
         $political_dismissal_types = Political_Dismissal_Type::all();
         $marital_statuss = Marital_Status::all();
         $yesnos = YesNo::all();
 
 
         $employee = Employee::where('url_address','=',$url_address) -> first();
         if (isset($employee)) {
            return view('employee.edit',compact(['employee','contract_types','employee_statuss','employment_types','sections','sub_sections','sub_sub_sections','assignment_types','nationalitys','mother_languages','genders','scientific_title_stages','job_titles','job_grades','career_stages','teaching_specializations','political_dismissal_types','marital_statuss','yesnos']));
     
         }
         else{
            $ip = $this->getIPAddress();
             return view('employee.accessdenied' , ['ip'=>$ip]);
         }
 
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $url_address)
    {
         // validate user input 

         $request->validate([
        
            'job_number' => ['required', 'digits:9'],
            
            //foreign id and reference
            'employee_status_id' => ['required','max:2'],
            'contract_type_id' => ['required','max:2'],
            'employment_type_id' => ['required','max:2'],
            'section_id' => ['required','max:2'],
            'sub_section_id' => ['required','max:2'],
            'sub_sub_section_id' => ['required','max:2'],
            'assignment_type_id' => ['required','max:2'],
            'nationality_id' => ['required','max:2'],
            'mother_language_id' => ['required','max:2'],
            'gender_id' => ['required','max:2'],
            'scientific_title_stage_id' => ['required','max:2'],
            'job_title_id' => ['required','max:2'],
            'job_grade_id' => ['required','max:2'],
            'career_stage_id' => ['required','max:2'],
            'teaching_specialization_id' => ['required','max:2'],
            'political_dismissal_type_id' => ['required','max:2'],
            'marital_status_id' => ['required','max:2'],
    
            //normal fields
            'name' => ['required','max:20'],
            'father_name' => ['required','max:20'],
            'grandfather_name' => ['required','max:20'],
            'fourth_grandfather_name' => ['max:20'],
            'surname' => ['max:20'],
            
            'mother_name' => ['max:20'],
            'mother_father_name' => ['max:20'],
            'mother_grandfather_name' => ['max:20'],
            'mother_surname' => ['max:20'],
            'place_of_birth' => ['max:20'],
            'first_husband_name' => ['max:20'],
            'husband_father_name' => ['max:20'],
            'husband_grandfather_name' => ['max:20'],
            'husband_surname' => ['max:20'],
            'number_of_children' => ['max:2'],
            'employee_phone_number' => ['max:16'],
            'employee_email' => ['max:50'],
            'is_national_card' => ['max:1'],
            'national_card_number' => ['max:12'],
            'national_card_date_of_issue' => ['nullable','date'],
            'national_card_issuing_authority' => ['max:50'],
            'national_card_family_number' => ['max:20'],
            'civil_status_identity_number' => ['max:20'],
            'civil_status_registry_number' => ['max:20'],
            'civil_status_newspaper_number' => ['max:20'],
            'civil_status_issue_date' => ['nullable','date'],
            'civil_status_issuer' => ['max:50'],
            'nationality_certificate_number' => ['max:20'],
            'nationality_certificate_authority_issuing' => ['max:50'],
            'nationality_certificate_authority_issuing_date' => ['nullable','date'],
            'nationality_certificate_authority_issuing_wallet' => ['max:20'],
            'housing_card_number' => ['max:20'],
            'housing_card_date_of_issue' => ['nullable','date'],
            'housing_card_issuing_authority' => ['max:50'],
            'housing_card_residence_address' => ['max:20'],
            'housing_card_governorate' => ['max:20'],
            'housing_card_district' => ['max:20'],
            'housing_card_neighborhood' => ['max:20'],
            'housing_card_house_number' => ['max:20'],
            'housing_card_nearest_point_of_reference' => ['max:30'],
            'housing_card_mukhtar_name' => ['max:20'],
            'certificate_of_appointment_academic_achievement' => ['max:20'],
            'certificate_of_appointment' => ['max:20'],
            'certificate_of_appointment_graduation_year' => ['max:9'],
            'certificate_of_appointment_university_institute_school_name' => ['max:50'],
            'certificate_of_appointment_college_name' => ['max:50'],
            'certificate_of_appointment_major' => ['max:20'],
            'certificate_of_appointment_mark' => ['max:3'],
            'last_academic_achievement' => ['max:20'],
            'last_certificate_obtained' => ['max:20'],
            'last_year_of_graduation' => ['max:9'],
            'last_name_of_the_university' => ['max:30'],
            'last_university_institute_school_name' => ['max:50'],
            'last_name_of_the_college' => ['max:50'],
            'last_major' => ['max:20'],
            'last_certificate_of_appointment_mark' => ['max:3'],
            'is_scientific_title' => ['max:1'],
            'scientific_title_date' => ['nullable','date'],
            'appointment_date' => ['nullable','date'],
            'appointment_ministerial_order_number' => ['max:20'],
            'appointment_ministerial_order_date' => ['nullable','date'],
            'appointment_administrative_order_number' => ['max:20'],
            'appointment_administrative_order_date' => ['nullable','date'],
            'appointment_first_initiation_number' => ['max:20'],
            'appointment_first_initiation_date' => ['nullable','date'],
            'nominal_salary' => ['max:7'],
            'job_grade_date' => ['nullable','date'],
            'career_stage_date' => ['nullable','date'],
            'is_political_dismissal' => ['max:1'],
            'political_dismissal_duration_from' => ['nullable','date'],
            'political_dismissal_duration_to' => ['nullable','date'],
            'political_dismissal_years' => ['max:2'],
            'political_dismissal_months' => ['max:2'],
            'political_dismissal_days' => ['max:2'],
            'political_dismissal_order_number' => ['max:20'],
            'political_dismissal_order_date' => ['nullable','date'],
            'political_dismissal_reappointment_number' => ['max:20'],
            'political_dismissal_date_reappointment' => ['nullable','date'],
            'political_dismissal_ministerial_reappointment_number' => ['max:20'],
            'political_dismissal_ministerial_reappointment_date' => ['nullable','date'],
                
            ]);

            // insert the user input into model and lareval insert it into the database.
        $data = [

           
    
            //foreign id and reference
            'employee_status_id' => $request->employee_status_id ,
            'contract_type_id' => $request->contract_type_id ,
            'employment_type_id' => $request->employment_type_id ,
            'section_id' => $request->section_id ,
            'sub_section_id' => $request->sub_section_id,
            'sub_sub_section_id' => $request->sub_sub_section_id,
            'assignment_type_id' => $request->assignment_type_id,
            'nationality_id' => $request->nationality_id,
            'mother_language_id' => $request->mother_language_id,
            'gender_id' => $request->gender_id,
            'scientific_title_stage_id' => $request->scientific_title_stage_id,
            'job_title_id' => $request->job_title_id,
            'job_grade_id' => $request->job_grade_id,
            'career_stage_id' => $request->career_stage_id,
            'teaching_specialization_id' => $request->teaching_specialization_id,
            'political_dismissal_type_id' => $request->political_dismissal_type_id,
            'marital_status_id' => $request->marital_status_id,
    
            //normal fields
            'job_number' => $request->job_number,
            'name' => $request->name,
            'father_name' => $request->father_name,
            'grandfather_name' => $request->grandfather_name,
            'fourth_grandfather_name' => $request->fourth_grandfather_name,
            'surname' => $request->surname,
            'full_name' => $request->full_name,
            'mother_name' => $request->mother_name,
            'mother_father_name' => $request->mother_father_name,
            'mother_grandfather_name' => $request->mother_grandfather_name,
            'mother_surname' => $request->mother_surname,
            'mother_full_name' => $request->mother_full_name,
            'place_of_birth' => $request->place_of_birth,
            'first_husband_name' => $request->first_husband_name,
            'husband_father_name' => $request->husband_father_name,
            'husband_grandfather_name' => $request->husband_grandfather_name,
            'husband_surname' => $request->husband_surname,
            'number_of_children' => $request->number_of_children,
            'employee_phone_number' => $request->employee_phone_number,
            'employee_email' => $request->employee_email,
            'is_national_card' => $request->is_national_card,
            'national_card_number' => $request->national_card_number,
            'national_card_issuing_authority' => $request->national_card_issuing_authority,
            'national_card_family_number' => $request->national_card_family_number,
            'civil_status_identity_number' => $request->civil_status_identity_number,
            'civil_status_registry_number' => $request->civil_status_registry_number,
            'civil_status_newspaper_number' => $request->civil_status_newspaper_number,
            'civil_status_issuer' => $request->civil_status_issuer,
            'nationality_certificate_number' => $request->nationality_certificate_number,
            'nationality_certificate_authority_issuing' => $request->nationality_certificate_authority_issuing,
            'nationality_certificate_authority_issuing_wallet' => $request->nationality_certificate_authority_issuing_wallet,
            'housing_card_number' => $request->housing_card_number,
            'housing_card_issuing_authority' => $request->housing_card_issuing_authority,
            'housing_card_residence_address' => $request->housing_card_residence_address,
            'housing_card_governorate' => $request->housing_card_governorate,
            'housing_card_district' => $request->housing_card_district,
            'housing_card_neighborhood' => $request->housing_card_neighborhood,
            'housing_card_house_number' => $request->housing_card_house_number,
            'housing_card_nearest_point_of_reference' => $request->housing_card_nearest_point_of_reference,
            'housing_card_mukhtar_name' => $request->housing_card_mukhtar_name,
            'certificate_of_appointment_academic_achievement' => $request->certificate_of_appointment_academic_achievement,
            'certificate_of_appointment' => $request->certificate_of_appointment,
            'certificate_of_appointment_graduation_year' => $request->certificate_of_appointment_graduation_year,
            'certificate_of_appointment_university_institute_school_name' => $request->certificate_of_appointment_university_institute_school_name,
            'certificate_of_appointment_college_name' => $request->certificate_of_appointment_college_name,
            'certificate_of_appointment_major' => $request->certificate_of_appointment_major,
            'certificate_of_appointment_mark' => $request->certificate_of_appointment_mark,
            'last_academic_achievement' => $request->last_academic_achievement,
            'last_certificate_obtained' => $request->last_certificate_obtained,
            'last_year_of_graduation' => $request->last_year_of_graduation,
            'last_name_of_the_university' => $request->last_name_of_the_university,
            'last_university_institute_school_name' => $request->last_university_institute_school_name,
            'last_name_of_the_college' => $request->last_name_of_the_college,
            'last_major' => $request->last_major,
            'last_certificate_of_appointment_mark' => $request->last_certificate_of_appointment_mark,
            'is_scientific_title' => $request->is_scientific_title,
            'appointment_ministerial_order_number' => $request->appointment_ministerial_order_number,
            'appointment_administrative_order_number' => $request->appointment_administrative_order_number,
            'appointment_first_initiation_number' => $request->appointment_first_initiation_number,
            'nominal_salary' => $request->nominal_salary,
            'is_political_dismissal' => $request->is_political_dismissal,
            'political_dismissal_years' => $request->political_dismissal_years,
            'political_dismissal_months' => $request->political_dismissal_months,
            'political_dismissal_days' => $request->political_dismissal_days,
            'political_dismissal_order_number' => $request->political_dismissal_order_number,
            'political_dismissal_reappointment_number' => $request->political_dismissal_reappointment_number,
            'political_dismissal_ministerial_reappointment_number' => $request->political_dismissal_ministerial_reappointment_number,
            
            // dates
            'date_of_birth' => (checkdate($request->date_of_birth_m,$request->date_of_birth_d,$request->date_of_birth_y)) ? $request->date_of_birth_y.'-'.$request->date_of_birth_m.'-'.$request->date_of_birth_d : null ,
            'national_card_date_of_issue' =>(checkdate($request->national_card_date_of_issue_m,$request->national_card_date_of_issue_d,$request->national_card_date_of_issue_y)) ? $request->national_card_date_of_issue_y.'-'.$request->national_card_date_of_issue_m.'-'.$request->national_card_date_of_issue_d : null ,
            'civil_status_issue_date' =>(checkdate($request->civil_status_issue_date_m,$request->civil_status_issue_date_d,$request->civil_status_issue_date_y)) ? $request->civil_status_issue_date_y.'-'.$request->civil_status_issue_date_m.'-'.$request->civil_status_issue_date_d : null,
            'nationality_certificate_authority_issuing_date' => (checkdate($request->nationality_certificate_authority_issuing_date_m,$request->nationality_certificate_authority_issuing_date_d,$request->nationality_certificate_authority_issuing_date_y)) ? $request->nationality_certificate_authority_issuing_date_y.'-'.$request->nationality_certificate_authority_issuing_date_m.'-'.$request->nationality_certificate_authority_issuing_date_d : null,
            'housing_card_date_of_issue' => (checkdate($request->housing_card_date_of_issue_m,$request->housing_card_date_of_issue_d,$request->housing_card_date_of_issue_y)) ? $request->housing_card_date_of_issue_y.'-'.$request->housing_card_date_of_issue_m.'-'.$request->housing_card_date_of_issue_d : null,
            'scientific_title_date' => (checkdate($request->scientific_title_date_m,$request->scientific_title_date_d,$request->scientific_title_date_y))? $request->scientific_title_date_y.'-'.$request->scientific_title_date_m.'-'.$request->scientific_title_date_d :null,
            'appointment_date' =>(checkdate($request->appointment_date_m,$request->appointment_date_d,$request->appointment_date_y))? $request->appointment_date_y.'-'.$request->appointment_date_m.'-'.$request->appointment_date_d:null,
            'appointment_ministerial_order_date' =>(checkdate($request->appointment_ministerial_order_date_m,$request->appointment_ministerial_order_date_d,$request->appointment_ministerial_order_date_y))? $request->appointment_ministerial_order_date_y.'-'.$request->appointment_ministerial_order_date_m.'-'.$request->appointment_ministerial_order_date_d:null,
            'appointment_administrative_order_date' =>(checkdate($request->appointment_administrative_order_date_m,$request->appointment_administrative_order_date_d,$request->appointment_administrative_order_date_y))? $request->appointment_administrative_order_date_y.'-'.$request->appointment_administrative_order_date_m.'-'.$request->appointment_administrative_order_date_d:null,
            'appointment_first_initiation_date' =>(checkdate($request->appointment_first_initiation_date_m,$request->appointment_first_initiation_date_d,$request->appointment_first_initiation_date_y))? $request->appointment_first_initiation_date_y.'-'.$request->appointment_first_initiation_date_m.'-'.$request->appointment_first_initiation_date_d:null,
            'job_grade_date' =>(checkdate($request->job_grade_date_m,$request->job_grade_date_d,$request->job_grade_date_y))? $request->job_grade_date_y.'-'.$request->job_grade_date_m.'-'.$request->job_grade_date_d:null,
            'career_stage_date' =>(checkdate($request->career_stage_date_m,$request->career_stage_date_d,$request->career_stage_date_y))? $request->career_stage_date_y.'-'.$request->career_stage_date_m.'-'.$request->career_stage_date_d:null,
            'political_dismissal_duration_from' =>(checkdate($request->political_dismissal_duration_from_m,$request->political_dismissal_duration_from_d,$request->political_dismissal_duration_from_y))? $request->political_dismissal_duration_from_y.'-'.$request->political_dismissal_duration_from_m.'-'.$request->political_dismissal_duration_from_d:null,
            'political_dismissal_duration_to' =>(checkdate($request->political_dismissal_duration_to_m,$request->political_dismissal_duration_to_d,$request->political_dismissal_duration_to_y))? $request->political_dismissal_duration_to_y.'-'.$request->political_dismissal_duration_to_m.'-'.$request->political_dismissal_duration_to_d:null,
            'political_dismissal_order_date' =>(checkdate($request->political_dismissal_order_date_m,$request->political_dismissal_order_date_d,$request->political_dismissal_order_date_y))? $request->political_dismissal_order_date_y.'-'.$request->political_dismissal_order_date_m.'-'.$request->political_dismissal_order_date_d:null,
            'political_dismissal_date_reappointment' =>(checkdate($request->political_dismissal_date_reappointment_m,$request->political_dismissal_date_reappointment_d,$request->political_dismissal_date_reappointment_y))? $request->political_dismissal_date_reappointment_y.'-'.$request->political_dismissal_date_reappointment_m.'-'.$request->political_dismissal_date_reappointment_d:null,
            'political_dismissal_ministerial_reappointment_date' =>(checkdate($request->political_dismissal_ministerial_reappointment_date_m,$request->political_dismissal_ministerial_reappointment_date_d,$request->political_dismissal_ministerial_reappointment_date_y))? $request->political_dismissal_ministerial_reappointment_date_y.'-'.$request->political_dismissal_ministerial_reappointment_date_m.'-'.$request->political_dismissal_ministerial_reappointment_date_d:null,
     
            ];

            $affected = Employee::where('url_address',$url_address)->update($data);
       
            //inform the user 
            return redirect()->route('employee.index')
                            ->with('success','تمت تعديل بيانات الموظف بنجاح ');
    
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $url_address)
    {
        $affected = Employee::where('url_address',$url_address)->delete();
        return redirect()->route('employee.index')
                            ->with('success','تمت حذف بيانات الموظف بنجاح ');
    }

     function get_random_string($length)
    {
      $array = array(0,1,2,3,4,5,6,7,8,9, 'a', 'b','c' , 'd', 'e', 'f','g', 'h', 'i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
      $text = "";
      $length = rand(22, $length);

      for($i=0;$i<$length;$i++) {
         $random = rand(0,61);
         $text .=$array[$random];
        }
      return $text;
    }

    function getIPAddress()
    {
    //whether ip is from the share internet
       if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
           $ip = $_SERVER['HTTP_CLIENT_IP'];
       }
    //whether ip is from the proxy
       elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
           $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
       }
    //whether ip is from the remote address
       else {
           $ip = $_SERVER['REMOTE_ADDR'];
       }
       return $ip;
   }

}
