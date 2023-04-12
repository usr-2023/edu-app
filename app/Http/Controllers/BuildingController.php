<?php

namespace App\Http\Controllers;

use App\DataTables\BuildingDataTable;
use Illuminate\Http\Request;




class BuildingController extends Controller
{

    public function index(BuildingDataTable $dataTable)
    {
        return $dataTable->render('building.index');
    }
    
}
