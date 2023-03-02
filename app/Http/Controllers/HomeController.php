<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class HomeController extends Controller
{
    public function login(){

        // if(Auth::check()){
        //     return redirect()->route('index');
        // }
        

        return view('login');
    }
    public function logueo(LoginRequest $request){
        $field = filter_var($request->input('usuario'), FILTER_VALIDATE_EMAIL) ? 'nombre' : 'usuario';
        
        $request->merge([$field => $request->input('usuario')]);
    
        //validar credenciales
        if (!Auth::validate($request->only($field, 'password'))) {
            return redirect()->to('login')->withErrors('CREDENCIALES INCORRECTAS');
        }
    
        //creaa una session
        $user = Auth::getProvider()->retrieveByCredentials($request->only($field, 'password'));
        Auth::login($user);
    
        return redirect()->to('index');
    }
   

    public function show(){
        return view('registrar');
    }
    public function registrar(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('login')->with('success','REGISTRO SATISFACTORIO');

    }
   
    public function index(){
        if(Auth::check()){
            //return redirect()->route('index');
            return view('index');
         }
        
         return view('login');
    }
}
