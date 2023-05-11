<?php

namespace App\Http\Controllers;

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
       return view('financial.test');
        
    }
}
