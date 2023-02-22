<?php

namespace App\Exports;

use App\Models\tablados;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TabladosExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return tablados::all();
    // }
    public function view(): View{
        
        return view('todos',[
            'tablados'=>tablados::all()
        ]);
    }
   
}
