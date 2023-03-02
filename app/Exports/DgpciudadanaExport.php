<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\tablados;

/** DIRECCION GENERAL DE PARTICIPACION CIUDADANA 9 **/
class DgpciudadanaExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        
        return view('Dgpciudadana',[
            'tablados'=>tablados::where('id_area','=',9)->get()
        ]);
    }
}
 