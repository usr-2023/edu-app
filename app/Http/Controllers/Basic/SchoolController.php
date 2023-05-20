<?php

namespace App\Http\Controllers\Basic;
use App\Http\Requests\Basic\SchoolRequest;
use App\DataTables\schoolDataTable;
use App\Http\Controllers\Controller;
use App\Models\Basic\Facility\Facility;
use App\Models\Basic\School\duality;
use App\Models\Basic\School\main_section;
use App\Models\Basic\School\School;
use App\Models\Basic\School\school_gender;
use App\Models\Basic\School\school_invironment;
use App\Models\Basic\School\school_property;
use App\Models\Basic\School\school_stage;
use App\Models\Basic\School\school_time;
use App\Models\Province;
use App\Models\YesNo;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(schoolDataTable $dataTable)
    {
       return $dataTable->render('basic.school.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $duality = duality::all();
        $main_section=main_section::all();
        $school_gender=school_gender::all();
        $school_invironment=school_invironment::all();
        $school_property=school_property::all();
        $school_stage=school_stage::all();
        $school_time=school_time::all();
        $facilitys = Facility::where('facility_type_id',2)->get();
        $provinces=Province::all();
        $yesnos = YesNo::all();
        return view('basic.school.create',compact(['facilitys','duality','main_section','school_gender','school_invironment','school_property','school_stage','school_time','yesnos','provinces']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SchoolRequest $request)
    {
        // insert the user input into model and lareval insert it into the database.
         School::create($request->validated());

        //inform the user 
        return redirect()->route('school.index')
                        ->with('success','تمت أضافة المدرسة بنجاح ');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $url_address)
    {
        $school = School::where('url_address','=',$url_address) -> first();
        if (isset($school)) {
            return view('basic.school.show', compact('school'));
        }
        else{
            $ip = $this->getIPAddress();
             return view('basic.school.accessdenied' , ['ip'=>$ip]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $url_address)
    {
        
        $school = School::where('url_address',$url_address) -> first();
        $duality = Duality::all();
        $main_section = Main_section::all();
        $school_gender = school_gender::all();
        $school_invironment = school_invironment::all();
        $school_property = school_property::all();
        $school_stage = School_stage::all();
        $school_time = school_time::all();
        $facilitys = Facility::where('facility_type_id',2)->get();
        $provinces=Province::all();
        $yesnos = YesNo::all();

        $school = School::where('url_address','=',$url_address) -> first();
         if (isset($school)) {
            return view('basic.school.edit',compact(['facilitys','school','duality','main_section','school_gender','school_invironment','school_property','school_stage','school_time','yesnos','provinces']));
     
         }
         else{
            $ip = $this->getIPAddress();
             return view('basic.school.accessdenied' , ['ip'=>$ip]);
         }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SchoolRequest $request, string $url_address)
    {
        School::where('url_address',$url_address)->update($request->validated());
        // Notify related users
        return redirect()->route('school.index')
        ->with('success','تمت تعديل بيانات المدرسة بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $url_address)
    {
        $affected = School::where('url_address',$url_address)->delete();
        return redirect()->route('school.index')
                            ->with('success','تمت حذف بيانات المدرسة بنجاح ');
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
