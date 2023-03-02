<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\tablados;

/** DIRECCION GENERAL DE DESARROLLO SOCIAL 8 **/

class DgdsocialExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        
        return view('Dgdsocial',[
            'tablados'=>tablados::where('id_area','=',8)->get()
        ]);
    }
}
 