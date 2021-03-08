<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
