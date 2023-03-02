<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\tablados;

/** DIRECCION EJECUTIVA DE PLANEACION DEL DESARROLLO Y SUSTENTABILIDAD 7 **/
class DepdsustentabilidadExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        
        return view('Depdsustentabilidad',[
            'tablados'=>tablados::where('id_area','=',7)->get()
        ]);
    }
}
 