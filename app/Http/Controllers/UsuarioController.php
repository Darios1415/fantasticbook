<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$usuarios = Usuario::all();
        return view('Cruds.Usuarios.index');//->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cruds.Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    /*  $usuarios = new Usuario();

        $usuarios->foto = $request->get('foto');
        $usuarios->nombre = $request->get('nombre');
        $usuarios->app = $request->get('app');
        $usuarios->apm = $request->get('apm');
        $usuarios->fn = $request->get('fn');
        $usuarios->telefono = $request->get('telefono');
        $usuarios->estado = $request->get('estado');
        $usuarios->municipio = $request->get('municipio');
        $usuarios->calle = $request->get('calle');
        $usuarios->num_i = $request->get('num_i');
        $usuarios->type = $request->get('type');
        $usuarios->cuenta = $request->get('cuenta');
        $usuarios->correo = $request->get('correo');
        $usuarios->contra = $request->get('contra');
        $usuarios->genero = $request->get('genero');
        $usuarios->activo = $request->get('activo');
        $usuarios->referencia = $request->get('referencia');

        $usuarios->save(); 
        return redirect('/usuarios');
    */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$usuario = Usuario::find(id);
        return view('Cruds.Usuarios.edit');//->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    /*  $usuario = Usuario::find($id);

        $usuario->foto = $request->get('foto');
        $usuario->nombre = $request->get('nombre');
        $usuario->app = $request->get('app');
        $usuario->apm = $request->get('apm');
        $usuario->fn = $request->get('fn');
        $usuario->telefono = $request->get('telefono');
        $usuario->estado = $request->get('estado');
        $usuario->municipio = $request->get('municipio');
        $usuario->calle = $request->get('calle');
        $usuario->num_i = $request->get('num_i');
        $usuario->type = $request->get('type');
        $usuario->cuenta = $request->get('cuenta');
        $usuario->correo = $request->get('correo');
        $usuario->contra = $request->get('contra');
        $usuario->genero = $request->get('genero');
        $usuario->activo = $request->get('activo');
        $usuario->referencia = $request->get('referencia');

        $usuarios->save(); 
        return redirect('/usuarios');
    */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /*  $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/usuarios');
      */
    }
}
