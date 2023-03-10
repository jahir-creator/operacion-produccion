<?php

namespace App\Http\Controllers;

use App\Imports\tableone;
use App\Imports\Usuariostablauno;
use App\Models\tablados;
use App\Models\tablauno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;


class TablaunoController extends Controller
{
    //
    public function index()
    {
        // if(Auth::check()){
        //     return redirect()->route('importar');
        // }
        
        return view('importar');
    }
    public function importar(Request $request)
    {
        //captura lo que subimos en file
        $file = $request->file('documento');

        //importar
        Excel::import(new tableone, $file);
        return back();
    }
    public function tablauno()
    {
        if(Auth::check()){
            $tablaunos = DB::table('tablauno')
            ->join('areas', 'tablauno.id_area', '=', 'areas.id')
            ->select('tablauno.id', 'tablauno.numero', 'tablauno.denominacion', 'tablauno.nombre', 'tablauno.id_area', 'areas.area')
            // ->paginate(15);
             ->get();

        $tablados = DB::table('tablados')
            ->join('areas', 'tablados.id_area', '=', 'areas.id')
            ->select('tablados.id', 'tablados.numero', 'tablados.denominacion', 'tablados.nombre', 'tablados.id_area', 'areas.area')
            ->get();


        return view('importar', compact('tablaunos', 'tablados'));
            
        }
        return view('login');
        
    }
    public function update(Request $request, $id)
    {
       

        $tablasdos = tablados::find($id);
        $tablasdos->numero = $request->numero;
        $tablasdos->denominacion = $request->denominacion;
        $tablasdos->nombre = $request->nombre;
        $tablasdos->id_area = $request->area;
        $tablasdos->correo = "NO TIENE CORREO";
        $tablasdos->contrasena = "NO TIENE CONTRASEÑA";
      
        $tablasdos->save();

        return back();

        // return view('importar', compact('tablaunos', 'tablados'));

    }
    public function limpiar()
    {
        DB::table('tablauno')->truncate();
        return back();
    }
}
