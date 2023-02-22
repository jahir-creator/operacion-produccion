<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\tablados;

class AlcalExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        
        return view('alcaldia',[
            'tablados'=>tablados::where('id_area','=',1)->get()
        ]);
    }
}
