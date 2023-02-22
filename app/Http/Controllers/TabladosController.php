<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\tablados;

class TabladosController extends Controller
{
    public function index(){
        

         $tabla = DB::table('tablados')
         ->join('areas', 'tablados.id_area', '=', 'areas.id')
         ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre','tablados.correo','tablados.contrasena', 'tablados.id_area', 'areas.area')
         ->get();

         $tablaalcaldia = DB::table('tablados')
         ->join('areas', 'tablados.id_area', '=', 'areas.id')
         ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre','tablados.correo','tablados.contrasena', 'tablados.id_area', 'areas.area')
         ->where('areas.id', '=', 1)
         ->get();
         

       

         return view('tablados',compact('tabla','tablaalcaldia'));
    }
    public function tabladoseditar($id){
        $tabla = DB::table('tablados')
        ->where('id', '=', $id)
        ->select('*')
        ->first();

        $password = Str::random(6);

        return view('tabladoseditar',compact('tabla','password'));
    }
  
   
    public function contra(){
        $password = Str::random(6);
        
        return back();
        //  return view('tablados/password',compact('password'));
    }
    public function update(Request $request, $id){

        $tablasdos = tablados::find($id);
        
        $tablasdos->correo = $request->correo;
        $tablasdos->contrasena = $request->pass;

        $tablasdos->save();


        $tabla = DB::table('tablados')
        ->join('areas', 'tablados.id_area', '=', 'areas.id')
        ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre','tablados.correo','tablados.contrasena', 'tablados.id_area', 'areas.area')
        ->get();

        $tablaalcaldia=DB::table('tablados')
        ->join('areas', 'tablados.id_area', '=', 'areas.id')
        ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre','tablados.correo','tablados.contrasena', 'tablados.id_area', 'areas.area')
        ->where('areas.id', '=', 1)
        ->get();

        return view('tablados',compact('tabla','tablaalcaldia'));
    }

}
