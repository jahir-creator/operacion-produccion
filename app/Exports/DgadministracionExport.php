<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\tablados;

/**DIRECCION GENERAL DE ADMINISTRACION 4 **/

class DgadministracionExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        
        return view('Dgadministracion',[
            'tablados'=>tablados::where('id_area','=',4)->get()
        ]);
    }
}
 