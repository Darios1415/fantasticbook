@extends('adminlte::page')

@section('title')

@section('content_header')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <h1>Municipios</h1>
@stop

@section('content')
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="col-lg-4">
                <div class="btn-group w-100">
                  <a href="municipio/create"> <span class="btn btn-success col fileinput-button">
                        <i class="fas fa-plus"></i>
                        <span>agregar municipio</span>
                    </span>
                    </a>
                </div>
                </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Identificador</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Toluca</td>
                    <td>Lerma</td>
                    <td align="left">
                    <a href="/editar_municipio" class="btn btn-warning"><i class="material-icons">edit</i></a>
                    <button class="btn btn-danger"><i class="material-icons">delete</i></button>
                </td>
                  </tr> 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop

@section('css')
  
@stop

@section('js')
<script>
 $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
    });
  });
</script>
@stop
