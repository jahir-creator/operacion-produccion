<?php

namespace App\Http\Controllers;


use App\Exports\TabladosExport;
use App\Exports\AlcalExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
   
    public function exporttodos(){
        return Excel::download(new TabladosExport,'todos.xlsx');
    }
    public function exportalcaldia(){
        return Excel::download(new AlcalExport,'alcaldia.xlsx');
    }    
}
