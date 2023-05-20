<?php

namespace App\Http\Controllers\Basic;
use App\Http\Controllers\Controller;
use App\Models\Basic\Section\Section;
use App\DataTables\SectionDataTable;
use App\Http\Requests\Basic\SectionRequest;
use App\Models\Basic\Facility\Facility;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SectionDataTable $dataTable)
    {
       return $dataTable->render('basic.Section.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $facilitys = Facility::where('facility_type_id',1)->get();
        return view('basic.section.create',compact('facilitys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request)
    {
        // insert the user input into model and lareval insert it into the database.
         Section::create($request->validated());

        //inform the user 
        return redirect()->route('section.index')
                        ->with('success','تمت أضافة المدرسة بنجاح ');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $url_address)
    {
        $section = Section::where('url_address','=',$url_address) -> first();
        if (isset($section)) {
            return view('basic.section.show', compact('section'));
        }
        else{
            $ip = $this->getIPAddress();
             return view('basic.section.accessdenied' , ['ip'=>$ip]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $url_address)
    {
   
        $section = Section::where('url_address','=',$url_address) -> first();
         if (isset($section)) {
            $facilitys = Facility::where('facility_type_id',1)->get();
            return view('basic.section.edit',compact(['section','facilitys']));
     
         }
         else{
            $ip = $this->getIPAddress();
             return view('basic.section.accessdenied' , ['ip'=>$ip]);
         }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectionRequest $request, string $url_address)
    {
        Section::where('url_address',$url_address)->update($request->validated());
        // Notify related users
        return redirect()->route('section.index')
        ->with('success','تمت تعديل بيانات المدرسة بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $url_address)
    {
        $affected = Section::where('url_address',$url_address)->delete();
        return redirect()->route('section.index')
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
