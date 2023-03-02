<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\tablados;

 /**DIRECCION GENERAL DE GOBIERNO Y DE GESTION INTEGRAL DE RIESGOS Y PROTECCION CIVIL 2 **/
class DgggirpcivilExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
   
    public function view(): View{
        
        return view('Dgggirpcivil',[
            'tablados'=>tablados::where('id_area','=',2)->get()
        ]);
    }
}
  