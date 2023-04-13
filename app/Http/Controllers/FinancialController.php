<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialController extends Controller
{
    //
    public function index()
    {
       return view('financial.index');
        
    }
    public function add_payroll()
    {
        return view('financial.add_payroll');
    }
    public function store()
    {

    }
}
