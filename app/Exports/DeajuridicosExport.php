<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\tablados;

 /** DIRECCION EJECUTIVA DE ASUNTOS JURIDICOS 3 **/
class DeajuridicosExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        
        return view('Deajuridicos',[
            'tablados'=>tablados::where('id_area','=',3)->get()
        ]);
    }
}
 