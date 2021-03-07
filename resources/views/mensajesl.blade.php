@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
    <h1><center>PROCESO {{$proceso}}</center></h1>
    <br>
    <div class="alert alert-success">{{$mensaje}}</div>

  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop