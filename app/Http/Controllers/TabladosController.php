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


         return view('tablados',compact('tabla'));
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
    public function documento (Request $request,$id){
        $tablasdos = tablados::find($id);
       
       $numero = $tablasdos->numero = $request->numero;
       $denominacion = $tablasdos->denominacion = $request->denominacion;
       $nombre = $tablasdos->nombre = $request->nombre;
       $correo = $tablasdos->correo = $request->correo;
       $pass = $tablasdos->contrasena = $request->contrasena;

       
      

       try {

             //code...

             $template = new \PhpOffice\PhpWord\TemplateProcessor(documentTemplate:'documento-test.docx');

             $template->setValue('numero',$numero);
             $template->setValue('denominacion',$denominacion);
             $template->setValue('nombre',$nombre);
             $template->setValue('correo',$correo);
             $template->setValue('password',$pass);



             $tenpFile = tempnam(sys_get_temp_dir(),'PHPWord');

             $template->saveAs($tenpFile);



             $header = [

                   "Content-Type: application/octet-stream",
             ];

             return response()->download($tenpFile, 'documento.docx', $header)->deleteFileAfterSend($shouldDelete = true);

         } catch (\PhpOffice\PhpWord\Exception\Exception $e) {

             return back($e->getCode());

        }

     }

     }


