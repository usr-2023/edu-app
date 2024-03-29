<?php

namespace App\Http\Controllers\Financial;
use App\DataTables\FinancialAccountantDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Financial\FinancialAccountantRequest;
use App\Models\Basic\Facility\Facility;
use App\Models\Department;
use App\Models\Financial\Financial_Accountant;
use App\Models\User;

class FinancialAccountantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FinancialAccountantDataTable $dataTable)
    {
       return $dataTable->render('financial.financial_accountant.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::role('accountant')->get();
        $facilitys=  Facility::Where('facility_accountent_id',null)->get();
        $departments = Department::all();
        return view('financial.financial_accountant.create',compact(['departments','users','facilitys']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FinancialAccountantRequest $request)
    {
        // insert the user input into model and lareval insert it into the database.
         $financial_accountent_id = Financial_Accountant::create($request->validated());
        // update the facility table to get accountent id
         $facilitys = $request->input('facility'); 
         foreach($facilitys as $facility_id){
        $facility = Facility::find($facility_id); 
        $facility->facility_accountent_id = $financial_accountent_id->id; 
        $facility->save(); 
        } 

     


        //inform the user 
        return redirect()->route('financial_accountant.index')
                        ->with('success','تمت أضافة المحاسب بنجاح ');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $url_address)
    {
        $financial_accountant = Financial_Accountant::where('url_address','=',$url_address) -> first();
        if (isset($financial_accountant)) {
            return view('financial.financial_accountant.show', compact('financial_accountant'));
        }
        else{
            $ip = $this->getIPAddress();
             return view('financial.financial_accountant.accessdenied' , ['ip'=>$ip]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $url_address)
    {
   
        $financial_accountant = Financial_Accountant::where('url_address','=',$url_address) -> first();
         if (isset($financial_accountant)) {
            $users = User::role('accountant')->get();
            $facilitys = Facility::where('facility_accountent_id',$financial_accountant->id)->orWhere('facility_accountent_id',null)->get();
            $accountent_facilitys = Facility::all()->where('facility_accountent_id' ,'=' ,$financial_accountant->id);
            $departments = Department::all();
            return view('financial.financial_accountant.edit',compact(['financial_accountant','facilitys','accountent_facilitys','departments','users']));
     
         }
         else{
            $ip = $this->getIPAddress();
             return view('financial.financial_accountant.accessdenied' , ['ip'=>$ip]);
         }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FinancialAccountantRequest $request, string $url_address)
    {
       Financial_Accountant::where('url_address',$url_address)->update($request->validated());

         // first set all facility -> facility_accountent_id to null 

         $old_facilitys = Facility::where('facility_accountent_id',$request->input('id'))->get(); 
         foreach($old_facilitys as $facility)
         {
                 $facility->facility_accountent_id = null; 
                 $facility->save(); 
         } 

         // update the checked values with accountent_id  in facility -> facility_accountent_id
         $facilitys = $request->input('facility'); 
          if (isset($facilitys))
           {
             foreach($facilitys as $facility_id)
             {
                 $facility = Facility::find($facility_id); 
                 $facility->facility_accountent_id = $request->id; 
                 $facility->save(); 
             } 
           }

        // Notify related users
        return redirect()->route('financial_accountant.index')
        ->with('success','تمت تعديل بيانات المحاسب بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $url_address)
    {
        $affected = Financial_Accountant::where('url_address',$url_address)->delete();
        return redirect()->route('financial_accountant.index')
                            ->with('success','تمت حذف بيانات المحاسب بنجاح ');
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
