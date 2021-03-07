<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subgeneros;
use App\Models\generos;
use App\Models\libros;

class SubgenerosController extends Controller
{
    //
    public function altasubgenero() {
        $consulta=subgeneros::withTrashed()->OrderBy('idsubgen','DESC')->take(1)->get();
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
            ->with('mensaje',"El subgenero $request->subgenero ha sido dado de alta correctamente")
            ->with('error',1);
        
    }
    public function reportesubgeneros(){
        $consulta=subgeneros::withTrashed()->join('generos','subgeneros.idgen','=','generos.idgen')
        ->select('subgeneros.idsubgen','generos.genero as gen','subgeneros.subgenero','subgeneros.deleted_at')
        ->orderBy('subgeneros.subgenero')
        ->get();
        return view('reportesubgeneros')->with('consulta',$consulta);
    }
    public function borrarsubgenero($idsubgen){
        $buscalibro=libros::where('idsubgen',$idsubgen)->get();
            $cuantos = count($buscalibro);
            if($cuantos==0){
                $subgeneros=subgeneros::withTrashed()->find($idsubgen)->forceDelete();
                return view('mensajesl')
                    ->with('proceso',"BORRAR SUBGÉNERO")
                    ->with('mensaje',"El subgénero ha sido borrado del sistema correctamente")
                    ->with('error',1);
            }
            else{
                return view('mensajesl')
                    ->with('proceso',"DESACTIVAR SUBGÉNERO")
                    ->with('mensaje',"El subgénero no se puede borrar debido a que tiene registros en Libro")
                    ->with('error',0);
            }
        
    }
    public function activarsubgenero($idsubgen){
        $subgeneros=subgeneros::withTrashed()->where('idsubgen',$idsubgen)->restore();
        return view('mensajesl')
            ->with('proceso',"ACTIVAR SUBGÉNERO")
            ->with('mensaje',"El subgénero ha sido activado correctamente")
            ->with('error',1);
    }
    public function desactivasubgenero($idsubgen){
        $subgeneros=subgeneros::find($idsubgen);
        $subgeneros->delete();
        return view('mensajesl')
            ->with('proceso',"DESACTIVAR SUBGÉNERO")
            ->with('mensaje',"El subgénero ha sido desactivado correctamente")
            ->with('error',1);
    }
}
