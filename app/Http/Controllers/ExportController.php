<?php

namespace App\Http\Controllers;


use App\Exports\TabladosExport;
use App\Exports\AlcalExport;
use App\Exports\DgggirpcivilExport;
use App\Exports\DeajuridicosExport;
use App\Exports\DgadministracionExport;
use App\Exports\DgodurbanoExport;
use App\Exports\DgsurbanosExport;
use App\Exports\DepdsustentabilidadExport;
use App\Exports\DgdsocialExport;
use App\Exports\DgpciudadanaExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
   
    public function exporttodos(){
        return Excel::download(new TabladosExport,'todos.xlsx');
    }
    public function exportalcaldia(){
        return Excel::download(new AlcalExport,'alcaldia.xlsx');
    }
    /** DIRECCION GENERAL DE GOBIERNO Y DE GESTION INTEGRAL DE RIESGOS Y PROTECCION CIVIL 2 **/
    public function exportDgggirpcivil(){
        return Excel::download(new DgggirpcivilExport,'Dgggirpcivil.xlsx');
    }
    /** DIRECCION EJECUTIVA DE ASUNTOS JURIDICOS 3 **/
      public function exportDeajuridicos(){
        return Excel::download(new DeajuridicosExport,'Deajuridicos.xlsx');
    }
    /** DIRECCION GENERAL DE ADMINISTRACION 4 **/
    public function exportDgadministracion(){
        return Excel::download(new DgadministracionExport,'Dgadministracion.xlsx');
    }
    /** DIRECCION GENERAL DE OBRAS Y DESARROLLO URBANO 5 **/
    public function exportDgodurbano(){
        return Excel::download(new DgodurbanoExport,'Dgodurbano.xlsx');
    }
     /** DIRECCION GENERAL DE SERVICIOS URBANOS 6 **/
     public function exportDgsurbanos(){
        return Excel::download(new DgsurbanosExport,'Dgsurbanos.xlsx');
    } 
    /** DIRECCION EJECUTIVA DE PLANEACION DEL DESARROLLO Y SUSTENTABILIDAD 7 **/
    public function exportDepdsustentabilidad(){
        return Excel::download(new DepdsustentabilidadExport,'Depdsustentabilidad.xlsx');
    }
    /** DIRECCION GENERAL DE DESARROLLO SOCIAL 8 **/
    public function exportDgdsocial(){
        return Excel::download(new DgdsocialExport,'Dgdsocial.xlsx');
    } 
    /** DIRECCION GENERAL DE PARTICIPACION CIUDADANA 9 **/
    public function exportDgpciudadana(){
        return Excel::download(new DgpciudadanaExport,'Dgpciudadana.xlsx');
    }           
}
