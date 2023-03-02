<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\tablados;
/** DIRECCION GENERAL DE OBRAS Y DESARROLLO URBANO 5 **/

class DgodurbanoExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        
        return view('Dgodurbano',[
            'tablados'=>tablados::where('id_area','=',5)->get()
        ]);
    }
    
}
 