@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Genero</h1>
@stop

@section('content')
<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title"> Detalle de Genero</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <form class="" action="#" method="post">

      <div class="row">
        <div class="col-sm-8">
          <!-- text input -->
          <div class="form-group">
            <label>Ingresa el nombre del genero</label>
            <input type="text" class="form-control" placeholder="Ingresa el nombre del genero literario ...">
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-sm-8">
          <!-- textarea -->
          <div class="form-group">
            <label>Descripcion del genero</label>
            <textarea class="form-control" rows="3" placeholder="Descripción acerca del genero ..."></textarea>
          </div>
        </div>

      </div>
</form>

      <form class="" action="#" method="post">
      <div class="row">
        <div class="col-sm-6">
          <!-- select -->
          <div class="form-group">
            <label>Subgnero</label>
            <select class="form-control">
              <option>Escoge una opcion</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
            </select>
          </div>
        </div>

      </div>


      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  <!-- /.card-body -->
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
