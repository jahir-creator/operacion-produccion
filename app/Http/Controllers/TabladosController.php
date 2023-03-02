<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\tablados;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TabladosImport;
use Illuminate\Support\Facades\Auth;

class TabladosController extends Controller
{
    public function index()
    {

        if(Auth::check()){
            $tabla = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.correo', 'tablados.contrasena', 'tablados.id_area', 'areas.area')
            ->get();
        /**OFICINA DE LA ALCALDIA**/
        $uno = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->where('tablados.id_area', '=', 1)
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.correo', 'tablados.contrasena', 'tablados.id_area', 'areas.area')
            ->get();
        /**DIRECCION GENERAL DE GOBIERNO Y DE GESTION INTEGRAL DE RIESGOS Y PROTECCION CIVIL 2**/
        $dos = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->where('tablados.id_area', '=', 2)
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.correo', 'tablados.contrasena', 'tablados.id_area', 'areas.area')
            ->get();
        /**DIRECCION EJECUTIVA DE ASUNTOS JURIDICOS 3**/
        $tres = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->where('tablados.id_area', '=', 3)
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.correo', 'tablados.contrasena', 'tablados.id_area', 'areas.area')
            ->get();
        /**DIRECCION GENERAL DE ADMINISTRACION 4**/
        $cuatro = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->where('tablados.id_area', '=', 4)
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.correo', 'tablados.contrasena', 'tablados.id_area', 'areas.area')
            ->get();
        /**DIRECCION GENERAL DE OBRAS Y DESARROLLO URBANO 5**/
        $cinco = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->where('tablados.id_area', '=', 5)
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.correo', 'tablados.contrasena', 'tablados.id_area', 'areas.area')
            ->get();
        /**DIRECCION GENERAL DE SERVICIOS URBANOS 6**/
        $seis = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->where('tablados.id_area', '=', 6)
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.correo', 'tablados.contrasena', 'tablados.id_area', 'areas.area')
            ->get();
        /**DIRECCION EJECUTIVA DE PLANEACION DEL DESARROLLO Y SUSTENTABILIDAD 7**/
        $siete = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->where('tablados.id_area', '=', 7)
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.correo', 'tablados.contrasena', 'tablados.id_area', 'areas.area')
            ->get();
        /**DIRECCION GENERAL DE DESARROLLO SOCIAL 8**/
        $ocho = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->where('tablados.id_area', '=', 8)
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.correo', 'tablados.contrasena', 'tablados.id_area', 'areas.area')
            ->get();
        /**DIRECCION GENERAL DE PARTICIPACION CIUDADANA 9**/
        $nueve = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->where('tablados.id_area', '=', 9)
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.correo', 'tablados.contrasena', 'tablados.id_area', 'areas.area')
            ->get();

        return view('tablados', compact('tabla', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis','siete','ocho','nueve'));
        }
        

        return view('login');
       
    }
    //lleva a la pagina de editar
    public function tabladoseditar($id)
    {
        $tabla = DB::table('tablados')
            ->where('id', '=', $id)
            ->select('*')
            ->first();

        $password = Str::random(6);

        return view('tabladoseditar', compact('tabla', 'password'));
    }


    public function contra($id)
    {
        $password = Str::random(6);
        $tabla = DB::table('tablados')
            ->where('id', '=', $id)
            ->select('*')
            ->first();

        return back();
        //return view('tabladoseditar', compact('tabla', 'password'));
    }
    //actualiza los registros en la vista editar
    public function update(Request $request, $id)
    {

        $tablasdos = tablados::find($id);


        $tablasdos->correo = $request->correo;
        $tablasdos->contrasena = $request->pass;


        $tablasdos->save();


        $tabla = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.correo', 'tablados.contrasena', 'tablados.id_area', 'areas.area')
            ->paginate(15);


        return redirect()->action([TabladosController::class, 'index']);
    }
    public function documento(Request $request, $id)
    {
        $tablasdos = tablados::find($id);

        $numero = $tablasdos->numero = $request->numero;
        $denominacion = $tablasdos->denominacion = $request->denominacion;
        $nombre = $tablasdos->nombre = $request->nombre;
        $correo = $tablasdos->correo = $request->correo;
        $pass = $tablasdos->contrasena = $request->contrasena;

        $cadena = $correo;
        $separador = "@";
        $separada = explode($separador, $cadena);
        $usuario = $separada[0];



        date_default_timezone_set('America/Mexico_City');

        $fecha_actual = getdate();
        $dia = $fecha_actual['mday'];
        $anio = $fecha_actual['year'];
        $mes = $fecha_actual['mon'];
        /**CONVERSION DE NUMERO A LETRA EN MESES**/
        switch ($mes) {
            case 1:
                $mes = "enero";
                break;
            case 2:
                $mes = "febrero";
                break;
            case 3:
                $mes = "marzo";
                break;
            case 4:
                $mes = "abril";
                break;
            case 5:
                $mes = "mayo";
                break;
            case 6:
                $mes = "junio";
                break;
            case 7:
                $mes = "julio";
                break;
            case 8:
                $mes = "agosto";
                break;
            case 9:
                $mes = "septiembre";
                break;
            case 10:
                $mes = "octubre";
                break;
            case 11:
                $mes = "noviembre";
                break;
            case 12:
                $mes = "diciembre";
                break;
        }




        try {

            //code...

            $template = new \PhpOffice\PhpWord\TemplateProcessor(documentTemplate: 'documento-test.docx');

            $template->setValue('numero', $numero);
            $template->setValue('denominacion', $denominacion);
            $template->setValue('nombre', $nombre);
            $template->setValue('correo', $correo);
            $template->setValue('password', $pass);
            $template->setValue('usuario', $usuario);
            $template->setValue('dia', $dia);
            $template->setValue('año', $anio);
            $template->setValue('mes', $mes);



            $tenpFile = tempnam(sys_get_temp_dir(), 'PHPWord');

            $template->saveAs($tenpFile);



            $header = [

                "Content-Type: application/octet-stream",
            ];

            return response()->download($tenpFile, 'documento.docx', $header)->deleteFileAfterSend($shouldDelete = true);
        } catch (\PhpOffice\PhpWord\Exception\Exception $e) {

            return back($e->getCode());
        }
    }
    public function impor()
    {
        return view('importartablados');
    }
    public function importardos(Request $request)
    {

        //captura lo que subimos en file
        $file = $request->file('documento');

        //importar
        Excel::import(new TabladosImport, $file);
        return back();
    }
}
