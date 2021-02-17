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
            'nombre' => 'required|alpha',
            'autor' => 'required|alpha',
            'paginas' => 'required|integer',
            'fechap' => 'required',
            'sinopsis' => 'required|alpha_num',
            'precio' => 'required',
        ]);
        echo "TODO CORRECTO";
    }
}
