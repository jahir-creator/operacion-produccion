<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\CorreosOtros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CorreosOtrosController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $datos = DB::table('correosotros')
                ->join('areas', 'correosotros.id_area', '=', 'areas.id')
                ->select('correosotros.id', 'correosotros.denominacion', 'correosotros.nombre', 'correosotros.correo', 'correosotros.contrasena', 'correosotros.id_area', 'areas.area')
                ->get();

            return view('correootros', compact('datos'));
        }
        return view('login');
    }
    public function nuevo(Request $request)
    {
        if (Auth::check()) {
            $areas = Areas::all();
            $password = Str::random(6); //LLAMAMOS LA VARIABLE PASSWORD PARA PODER GENERAR EN LA VISTA

            return view('nuevootro', compact('areas', 'password'));
        }
        return view('login');
    }
    //GENERAR CONTRASEÑA EN LA MISMA VISTA (MUEVOOTROS Y EDITAROTROS)
    public function password()
    {

        $password = Str::random(6);

        return back();
    }
    public function nuevocapturar(Request $request)
    {

        $correootros = new CorreosOtros();

        $correootros->denominacion = $request->denominacion;
        $correootros->nombre = $request->nombre;
        $correootros->id_area = $request->area;
        $correootros->correo = $request->correo;
        $correootros->contrasena = $request->contrasena;

        $correootros->save();

        return redirect()->action([CorreosOtrosController::class, 'index']);
    }
    public function editar($id)
    {
        if (Auth::check()) {
            $password = Str::random(6);
            $areas = Areas::all();
            $datos = DB::table('correosotros')
                ->join('areas', 'correosotros.id_area', '=', 'areas.id')
                ->where('correosotros.id', '=', $id)
                ->select('correosotros.id', 'correosotros.denominacion', 'correosotros.nombre', 'correosotros.correo', 'correosotros.contrasena', 'correosotros.id_area', 'areas.area')
                ->first();

            return view('otroseditar', compact('datos', 'areas', 'password'));
        }
        return view('login');
    }
    public function update(Request $request, $id)
    {
        $correootros = CorreosOtros::find($id);

        $correootros->denominacion = $request->denominacion;
        $correootros->nombre = $request->nombre;
        $correootros->id_area = $request->area;
        $correootros->correo = $request->correo;
        $correootros->contrasena = $request->contrasena;

        $correootros->update();

        return redirect()->action([CorreosOtrosController::class, 'index']);
    }

    //GENERADOR EN WORD
    public function documento(Request $request, $id)
    {
        $tablasdos = CorreosOtros::find($id);

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
}
