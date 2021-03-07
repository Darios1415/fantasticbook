<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\generos;
use App\Models\subgeneros;

class GenerosController extends Controller
{
    //
    public function altagenero() {
        $consulta=generos::withTrashed()->OrderBy('idgen','DESC')->take(1)->get();
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
            ->with('mensaje',"El genero $request->genero ha sido dado de alta correctamente")
            ->with('error',1);
        
    }
    public function reportegeneros(){
        $consulta = generos::withTrashed()
        ->select('generos.idgen','generos.genero','generos.deleted_at')
        ->orderBy('generos.genero')
        ->get();
        return view('reportegeneros')->with('consulta',$consulta);
    }
    public function borrargenero($idgen){
            $buscagenero=subgeneros::where('idgen',$idgen)->get();
            $cuantos = count($buscagenero);
            if($cuantos==0){
                $generos=generos::withTrashed()->find($idgen)->forceDelete();
                return view('mensajesl')
                ->with('proceso',"BORRAR GENERO")
                ->with('mensaje',"El genero ha sido borrado del sistema correctamente")
                ->with('error',1);
            }
            else{
                return view('mensajesl')
                    ->with('proceso',"DESACTIVAR GENERO")
                    ->with('mensaje',"El genero no se puede borrar debido a que tiene registros en Subgénero")
                    ->with('error',0);
            }
    }
    public function activargenero($idgen){
        $generos=generos::withTrashed()->where('idgen',$idgen)->restore();
        return view('mensajesl')
            ->with('proceso',"ACTIVAR GENERO")
            ->with('mensaje',"El genero ha sido activado correctamente")
            ->with('error',1);
    }
    public function desactivagenero($idgen){
        $buscagenero=generos::find($idgen);
        $generos=generos::find($idgen);
        $generos->delete();
        return view('mensajesl')
            ->with('proceso',"DESACTIVAR GENERO")
            ->with('mensaje',"El genero ha sido desactivado correctamente")
            ->with('error',1);
    }
}
