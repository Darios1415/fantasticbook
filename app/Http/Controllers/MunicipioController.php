<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tablas.municipio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cruds.municipio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    /*  $municipio = new municipio();
        $municipio->municipio = $request->get('municipio');
        $municipio->save(); 
        return redirect('/municipio');
    */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idmun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idmun)
    {
        //$municipio = Municipio::find(idmun);
        return view('Cruds.municipio.edit');//->with('municipio',$municipio);
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
    /*  $municipio = Municipio::find($idmun);
        $municipio->municipio = $request->get('municipio');
        $municipio->save(); 
        return redirect('/municpio');
    */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idmun)
    {
    /*  $municipio = Municipio::find($idmun);
        $municipio->delete();
        return redirect('/municipio');
    */
    }
}
