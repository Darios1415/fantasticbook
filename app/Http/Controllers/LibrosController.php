<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subgeneros;
use App\Models\generos;
use App\Models\libros;

class LibrosController extends Controller
{
    //
    public function altalibro() {
        $consulta=libros::OrderBy('idlibro','DESC')->take(1)->get();
        $cuantos=count($consulta);
        if($cuantos==0){
            $idlsigue = 1;
        }
        else{
            $idlsigue=$consulta[0]->idlibro + 1;
        }
        $generos =generos::orderBy('genero')->get();
        //return $idlsigue;
        return view('altalibro')
            ->with('idlsigue',$idlsigue)
            ->with('generos',$generos);
    }

    public function guardarlibro(Request $request) {
        $this->validate($request,[
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú,ñ,Ñ,Á,É,Í,Ó,Ú,ü, ]+$/',
            'autor' => 'required|regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú,ñ,Ñ,Á,É,Í,Ó,Ú,ü, ]+$/',
            'paginas' => 'required|integer',
            'fechap' => 'required',
            'sinopsis' => 'required|regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú,ñ,Ñ,Á,É,Í,Ó,Ú,ü,.,-,_,¿,?, ]+$/',
            'precio' => 'required|regex:/^[0-9]+[.][0-9]{2}$/',
            'archivo' => 'required',
            'foto' => 'required|',
        ]);
        $libros = new libros;
        $libros->idlibro = $request->idlibro;
        $libros->nombre =$request->nombre;
        $libros->autor =$request->autor;
        $libros->paginas =$request->paginas;
        $libros->fechap =$request->fechap;
        $libros->idioma=$request->idioma;
        $libros->sinopsis =$request->sinopsis;
        $libros->idgen=$request->idgen;
        $libros->idsubgen=$request->idsubgen;
        $libros->archivo=$request->archivo;
        $libros->precio=$request->precio;
        $libros->disponibilidad =$request->disponibilidad;
        $libros->foto =$request->foto;
        $libros->save();
        return view('mensajesl')
            ->with('proceso',"ALTA DE LIBROS")
            ->with('mensaje',"El libro $request->nombre ha sido dado de alta correctamente");
        
    }

    public function reportelibros(){
        $consulta=libros::join('generos','libros.idgen','=','generos.idgen')
        ->select('libros.idlibro','libros.nombre','libros.autor','libros.precio',
        'generos.genero as gen','libros.foto')
        ->orderBy('libros.nombre')
        ->get();
        return view('reportelibros')->with('consulta',$consulta);
    }
    public function editarlibro($idlibro)
    {
        return view('editarlibro');
    }
    public function eloquent(){
        //$consulta = libros::all();
        //return $consulta;
        //
        /*$libros = new libros;
        $libros->idlibro = 10;
        $libros->nombre ="Corazón de Tinta";
        $libros->autor ="Cornelia funke";
        $libros->paginas =250;
        $libros->fechap ="2013-13-07";
        $libros->idioma="esp";
        $libros->sinopsis ="Mortimer debe aprender su poder";
        $libros->idgen="1";
        $libros->idsubgen="1";
        $libros->archivo="inkheart.pdf";
        $libros->precio="0.99";
        $libros->disponibilidad ="Digital";
        $libros->foto ="inkheart.jpg";
        $libros->save(); */

        /*$libros = libros::create([
            'idlibro'=>12,'nombre'=>"Corazón de Tinta",'autor'=>"Cornelia funke",'paginas'=>250,
            'fechap'=>"2013-13-07",'idioma'=>"esp",'sinopsis'=>"Mortimer debe aprender su poder",
            'idgen'=>"1",'idsubgen'=>"1",'archivo'=>"inkheart.pdf",'precio'=>70.99,
            'disponibilidad'=>"Digital",'foto'=>"inkheart.jpg"
        ]);
        return "Operación realizada";
        */
        /*$libros = libros::find(11);
        $libros->nombre="Inocente";
        $libros->autor="Pepe el Toro";
        $libros->save(); */
        /*libros::where('paginas',250)
        ->update(['fechap'=>"03/06/2021"]);
        return "Modificación realizada";
        */
        /*$libros=libros::find(8);
        $libros->delete();*/
        //libros::destroy(12);
        /*$libros=libros::where('precio',1.00)
        ->delete(); 
        return "Eliminación realizada"; */
       /* $consulta = libros::onlyTrashed()->get();
        return $consulta;
        */
        //libros::withTrashed()->where('idlibro',8)->restore();
        //return "Registro restaurado";
        //$libros=libros::find(8)->forceDelete();
        //$consulta = libros::all();
        /*$consulta=libros::join('subgeneros','libros.idsubgen','=','subgeneros.idsubgen')
        ->select('libros.nombre as Titulo','libros.autor','libros.idsubgen')
        ->where('libros.idsubgen','=',1)
        ->get();
        $cuantos = count($consulta); */

        $consulta=libros::join('generos','libros.idgen','=','generos.idgen')
        ->select('libros.nombre as Titulo','libros.autor','generos.genero as genero','libros.idsubgen')
        ->where('libros.idgen','=',1)
        ->orwhere('idsubgen',1)
        ->get();
        return $consulta;
    }
}
