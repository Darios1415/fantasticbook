<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\generos;

class GenerosController extends Controller
{
    //
    public function altagenero() {
        $consulta=generos::OrderBy('idgen','DESC')->take(1)->get();
        $cuantos=count($consulta);
        if($cuantos==0){
            $idgsigue = 1;
        }
        else{
            $idgsigue=$consulta[0]->idgen + 1;
        }
        return view('altagenero')
            ->with('idgsigue',$idgsigue);
    }
    public function guardargenero(Request $request) {
        $this->validate($request,[
            'genero' => 'required|regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú,ñ,Ñ,Á,É,Í,Ó,Ú,ü, ]+$/',
        ]);
        $generos = new generos;
        $generos->idgen = $request->idgen;
        $generos->genero =$request->genero;
        $generos->save();
        return view('mensajesl')
            ->with('proceso',"ALTA DE GENEROS")
            ->with('mensaje',"El genero $request->genero ha sido dado de alta correctamente");
        
    }
    public function reportegeneros(){
        $consulta = generos::all();
        return view('reportegeneros')->with('consulta',$consulta);
    }
}
