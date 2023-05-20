<?php

namespace App\Http\Controllers;

use App\Models\Basic\Facility\Facility;
use App\Models\Basic\School\School;
use App\Models\Basic\Section\Section;
use App\Models\User;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    //
    public function index()
    {
        $users = User::select('id','name')->where('department_id',1)->role('admin')->get();
       return view('financial.index',compact(['users']));
        
    }
    public function add_payroll()
    {
        return view('financial.add_payroll');
    }
    public function store()
    {

    }

    public function test()
    {
        $facilitys = Facility::with(['get_sections','get_schools','get_employees'])->get();
        
       return view('financial.test',compact('facilitys'));
        
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
}
