<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\tablados;
/** DIRECCION GENERAL DE SERVICIOS URBANOS 6 **/
class DgsurbanosExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        
        return view('Dgsurbanos',[
            'tablados'=>tablados::where('id_area','=',6)->get()
        ]);
    }
}
 