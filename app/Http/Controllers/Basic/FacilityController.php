<?php

namespace App\Http\Controllers\Basic;
use App\Http\Controllers\Controller;
use App\Models\Basic\Facility\Facility;
use App\DataTables\FacilityDataTable;
use App\Http\Requests\Basic\FacilityRequest;
use App\Models\Basic\Facility\Facility_Group;
use App\Models\Basic\Facility\Facility_Type;
use App\Models\Basic\School\School;
use App\Models\Basic\Section\Section;
use App\Models\Department;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FacilityDataTable $dataTable)
    {
       return $dataTable->render('basic.facility.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        $facility_types = Facility_Type::all();
        $facility_groups= Facility_Group::all();

        return view('basic.facility.create',compact(['departments','facility_types','facility_groups']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacilityRequest $request)
    {
        // insert the user input into model and lareval insert it into the database.
         Facility::create($request->validated());

        //inform the user 
        return redirect()->route('facility.index')
                        ->with('success','تمت أضافة المؤسسة بنجاح ');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $url_address)
    {
        $facility = Facility::where('url_address','=',$url_address) -> first();
        if (isset($facility)) {

            $section = Section::where('id','=',$facility->facility_link_id)->first();
            $school = School::where('id','=',$facility->facility_link_id)->first();
    
            return view('basic.facility.show', compact(['facility','school','section']));
        }
        else{
            $ip = $this->getIPAddress();
             return view('basic.facility.accessdenied' , ['ip'=>$ip]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $url_address)
    {
   
        $facility = Facility::where('url_address','=',$url_address) -> first();
         if (isset($facility)) {
            $departments = Department::all();
            $facility_groups= Facility_Group::all();
            $facility_types = Facility_Type::all();
            $schools = School::all();
            $sections = Section::all();
            return view('basic.facility.edit',compact(['facility','departments','facility_groups','facility_types','schools','sections']));
     
         }
         else{
            $ip = $this->getIPAddress();
             return view('basic.Facility.accessdenied' , ['ip'=>$ip]);
         }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacilityRequest $request, string $url_address)
    {
        Facility::where('url_address',$url_address)->update($request->validated());
        // Notify related users
        return redirect()->route('facility.index')
        ->with('success','تمت تعديل بيانات المؤسسة بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $url_address)
    {
        $affected = Facility::where('url_address',$url_address)->delete();
        return redirect()->route('facility.index')
                            ->with('success','تمت حذف بيانات المؤسسة بنجاح ');
    }

	public function get_facility_links(Request $request){

        if ($request->id == 1) {
            $data=Section::all();
            return response()->json($data);//then sent this data to ajax success

        } elseif ($request->id == 2) {
            $data=School::all();
            return response()->json($data);//then sent this data to ajax success
        }
        
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
