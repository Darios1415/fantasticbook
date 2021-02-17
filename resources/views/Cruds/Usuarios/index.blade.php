@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div id= "page-wrapper">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-muted" align="center">REPORTE DE REGISTROS</h2>
        </div>
    </div>
    <hr>
</div>
</div>
@stop

@section('content')

<a href="usuarios/create" class="btn btn-outline-dark mb-4 "><i class="material-icons">add_circle</i></a>
<div class="table-responsive">
          

    <table  id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col" align="justify">Clave</th>
                <th scope="col" align="justify">Foto</th>
                <th scope="col" align="justify">Nombre Completo</th>
                <th scope="col" align="justify">Teléfono</th>
                <th scope="col" align="justify">Estado</th>
                <th scope="col" align="justify">Municipio</th>
                <th scope="col" align="justify">Calle</th>
                <th scope="col" align="justify">Tipo</th>
                <th scope="col" align="justify">Cuenta</th>
                <th scope="col" align="justify">Correo</th>
                <th scope="col" align="justify">Activo</th>
                <th scope="col" align="justify">Opciones</th>
            </tr>
        </thead>
        <tbody>
        
            <tr>
                <td align="center">1</td>
                <td align="center"></td>
                <td>Jimena Tovar Hernández</td>
                <td align="left">7225020216</td>
                <td align="cengter">México</td>
                <td>Xonacatlan</td>
                <td >Constitución</td>
                <td align="center">Cliente</td>
                <td align="center">Free</td>
                <td align="center">jimena@gmail.com</td>
                <td align="center">Si</td>
                <td align="left">
                    <a href="/editar_usuario" class="btn btn-warning"><i class="material-icons">edit</i></a>
                    <button class="btn btn-danger"><i class="material-icons">delete</i></button>
                </td>
            </tr>

            <tr>
                <td align="center">2</td>
                <td align="center"></td>
                <td>Samara Torre Blanca</td>
                <td align="left">7225020216</td>
                <td align="cengter">México</td>
                <td >Xonacatlan</td>
                <td >Constitución</td>
                <td align="center">Cliente</td>
                <td align="center">Free</td>
                <td align="center">jimena@gmail.com</td>
                <td align="center">Si</td>
                <td align="left">
                    <a href="/editar_usuario" class="btn btn-warning"><i class="material-icons">edit</i></a>
                    <button class="btn btn-danger"><i class="material-icons">delete</i></button>
                </td>
            </tr>
            
        </tbody>
    </table>
 </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
    $('#usuarios').DataTable({
        "lengthMenu": [[5,10,50,-1], [5,10,50, "All"]]
    });
} );
    </script>
@stop