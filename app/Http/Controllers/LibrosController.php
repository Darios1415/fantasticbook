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
        return view('altalibro');
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
        echo "TODO CORRECTO";
    }
    public function editarlibro($idlibro)
    {
        return view('editarlibro');
    }
    public function eloquent(){
        //
        $libros = new libros;
        $libros->idlibro = 3;
        $libros->nombre ="Corazón de Tinta";
        $libros->autor ="Cornelia funke";
        $libros->paginas =250;
        $libros->fechap ="2013-13-07";
        $libros->idioma="esp";
        $libros->sinopsis ="Mortimer debe aprender su poder";
        $libros->idgen="1";
        $libros->idsubgen="1";
        $libros->archivo="inkheart.pdf";
        $libros->precio="270.90";
        $libros->disponibilidad ="Digital";
        $libros->foto ="inkheart.jpg";
        $libros->save();
        return "Operación realizada";
    }
}
