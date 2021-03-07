<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subgeneros;
use App\Models\generos;

class SubgenerosController extends Controller
{
    //
    public function altasubgenero() {
        $consulta=subgeneros::OrderBy('idsubgen','DESC')->take(1)->get();
        $cuantos=count($consulta);
        if($cuantos==0){
            $idssigue = 1;
        }
        else{
            $idssigue=$consulta[0]->idsubgen + 1;
        }
        $generos =generos::orderBy('genero')->get();
        return view('altasubgenero')
            ->with('idssigue',$idssigue)
            ->with('generos',$generos);
    }
    public function guardarsubgenero(Request $request) {
        $this->validate($request,[
            'subgenero' => 'required|regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú,ñ,Ñ,Á,É,Í,Ó,Ú,ü, ]+$/',
        ]);
        $subgeneros = new subgeneros;
        $subgeneros->idsubgen = $request->idsubgen;
        $subgeneros->subgenero =$request->subgenero;
        $subgeneros->idgen = $request->idgen;
        $subgeneros->save();
        return view('mensajesl')
            ->with('proceso',"ALTA DE SUBGENEROS")
            ->with('mensaje',"El subgenero $request->subgenero ha sido dado de alta correctamente");
        
    }
}
