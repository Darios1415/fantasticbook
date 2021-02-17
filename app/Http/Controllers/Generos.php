<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function guardar(Request $request)
    {
        $nombre=$request->nombre;
        $sexo=$request->sexo;
        $this->validate($request,[
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'apellidop'=>'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'apellidom'=>'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
            'email'=>'required|email',
            'localidad'=>'required',
            'calle'=>'required',
            'telefono'=>'required|regex:/^[0-9]{10}$/',

            ]);
        echo "Todo completo";
        if ($sexo=='m')
        {
        echo "tu eres $nombre y tu sexo es masculino";
        }
        else {
            echo "tu eres $nombre y tu sexo es femenino";
        }
// return $request;
        // return view ("layaut/vista2");
    }
}
