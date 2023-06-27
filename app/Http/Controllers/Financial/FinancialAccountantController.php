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
        $facilitys= Facility::all();
        $departments = Department::all();
        return view('financial.financial_accountant.create',compact(['departments','users','facilitys']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FinancialAccountantRequest $request)
    {
        // insert the user input into model and lareval insert it into the database.
         Financial_Accountant::create($request->validated());

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
            $departments = Department::all();
            return view('financial.financial_accountant.edit',compact(['financial_accountant','departments','users']));
     
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
