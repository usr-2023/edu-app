<?php

namespace App\Http\Controllers\Basic;

use App\DataTables\EmployeeDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Basic\EmployeeRequest;
use App\Models\Basic\Employee\Assignment_Type;
use App\Models\Basic\Employee\Career_Stage;
use App\Models\Basic\Employee\Contract_Type;
use App\Models\Basic\Employee\Employee;
use App\Models\Basic\Employee\Employee_Status;
use App\Models\Basic\Employee\Employment_Type;
use App\Models\Basic\Employee\Gender;
use App\Models\Basic\Employee\Job_Grade;
use App\Models\Basic\Employee\Job_Title;
use App\Models\Basic\Employee\Marital_Status;
use App\Models\Basic\Employee\Mother_Language;
use App\Models\Basic\Employee\Nationality;
use App\Models\Basic\Employee\Political_Dismissal_Type;
use App\Models\Basic\Employee\Scientific_Title_Stage;
use App\Models\Basic\Employee\Teaching_Specialization;
use App\Models\Basic\Facility\Facility;
use App\Models\User;
use App\Models\YesNo;
use App\Notifications\Employee\EmployeeCreatedNotify;
use App\Notifications\Employee\EmployeeUpdateNotify;
use Illuminate\Support\Facades\Notification;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(EmployeeDataTable $dataTable)
    {
       return $dataTable->render('basic.employee.index');
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
        $facilitys = Facility::all();
        $yesnos = YesNo::all();

        return view('basic.employee.create',compact(['facilitys','contract_types','employee_statuss','employment_types','assignment_types','nationalitys','mother_languages','genders','scientific_title_stages','job_titles','job_grades','career_stages','teaching_specializations','political_dismissal_types','marital_statuss','yesnos']));
    }

    /**
     * Store a newly created employee in storage.
     */
    public function store(EmployeeRequest $request)
    {
        // insert the user input into model and lareval insert it into the database.
         Employee::create($request->validated());

        // Notify related users
        Notification::send(User::all(),new EmployeeCreatedNotify($request));
   
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
            return view('basic.employee.show', compact('employee'));
        }
        else{
            $ip = $this->getIPAddress();
             return view('basic.employee.accessdenied' , ['ip'=>$ip]);
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
         $facilitys = Facility::all();
         $yesnos = YesNo::all();
 
 
         $employee = Employee::where('url_address','=',$url_address) -> first();
         if (isset($employee)) {
            return view('basic.employee.edit',compact(['facilitys','employee','contract_types','employee_statuss','employment_types','assignment_types','nationalitys','mother_languages','genders','scientific_title_stages','job_titles','job_grades','career_stages','teaching_specializations','political_dismissal_types','marital_statuss','yesnos']));
     
         }
         else{
            $ip = $this->getIPAddress();
             return view('basic.employee.accessdenied' , ['ip'=>$ip]);
         }
 
        
    }

    /**
     * Update the specified employee in storage.
     */
    public function update(EmployeeRequest $request, string $url_address)
    {
            
        // insert the user input into model and lareval insert it into the database.
        Employee::where('url_address',$url_address)->update($request->validated());
        // Notify related users
        Notification::send(User::all(),new EmployeeUpdateNotify($request));
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
