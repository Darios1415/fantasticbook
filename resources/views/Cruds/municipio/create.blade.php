@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@stop

@section('content')
 <!-- general form elements disabled -->
 <div class="card card-primary">
            <div class="card-header">
                <h2 class="card-title">NUEVO municipio</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form  class="was-validated">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label  class="form-label">Nombre(s)</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Inserte nombre" pattern="[A-Za-záéíóú ]+[A-Za-záéíóú ]" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                        <div class="invalid-feedback"> Letras mayúsculas y minúsculas </div>
                    </div>
                    </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i>
                        <span>Guardar</span></button>
                        <a href="/usuarios" class="btn btn-danger float-right"><i class="fas fa-times-circle"></i>
                        <span>Cancelar</span> </a>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop