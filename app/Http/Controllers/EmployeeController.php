<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeeDataTable;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee\Assignment_Type;
use App\Models\Employee\Career_Stage;
use App\Models\Employee\Contract_Type;
use App\Models\Employee\Employee;
use App\Models\Employee\Employee_Status;
use App\Models\Employee\Employment_Type;
use App\Models\Employee\Gender;
use App\Models\Employee\Job_Grade;
use App\Models\Employee\Job_Title;
use App\Models\Employee\Marital_Status;
use App\Models\Employee\Mother_Language;
use App\Models\Employee\Nationality;
use App\Models\Employee\Political_Dismissal_Type;
use App\Models\Employee\Scientific_Title_Stage;
use App\Models\Employee\Section;
use App\Models\Employee\Sub_Section;
use App\Models\Employee\Sub_Sub_Section;
use App\Models\Employee\Teaching_Specialization;
use App\Models\YesNo;


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
     * Store a newly created employee in storage.
     */
    public function store(EmployeeRequest $request)
    {
        // insert the user input into model and lareval insert it into the database.
         Employee::create($request->validated());
   
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
     * Update the specified employee in storage.
     */
    public function update(EmployeeRequest $request, string $url_address)
    {
            
            // insert the user input into model and lareval insert it into the database.
             Employee::where('url_address',$url_address)->update($request->validated());
       
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
