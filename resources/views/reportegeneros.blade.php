@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1><center>Reporte de Géneros</center></h1>
    <br>
    <span class="float-right">
        <a href="{{route('altagenero')}}">
            <button type="button" class="btn btn-primary">Alta de Géneros</button>
        </a>
    </span>
    <br><br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Clave</th>
                <th scope="col">Género</th>
                <th scope="col">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consulta as $c)
            <tr>
                <th scope="row">{{$c->idgen}}</th>
                <td>{{$c->genero}}</td>
                <td>
                <button type="button" class="btn btn-warning">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop