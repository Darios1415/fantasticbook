@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1><center>Reporte de Libros</center></h1>
    <br>
    <span class="float-right">
        <a href="{{route('altalibro')}}">
            <button type="button" class="btn btn-primary">Alta de libro</button>
        </a>
    </span>
    <br><br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Clave</th>
                <th scope="col">Libro</th>
                <th scope="col">Autor</th>
                <th scope="col">Precio</th>
                <th scope="col">Genero</th>
                <th scope="col">Foto</th>
                <th scope="col">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consulta as $c)
            <tr>
                <th scope="row">{{$c->idlibro}}</th>
                <td>{{$c->nombre}}</td>
                <td>{{$c->autor}}</td>
                <td>{{$c->precio}}</td>
                <td>{{$c->gen}}</td>
                <td>{{$c->foto}}</td>
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

@section('js')
    <script> console.log('Hi!'); </script>
@stop