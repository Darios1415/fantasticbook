@extends('adminlte::page')

@section('title', 'Sucursal')

@section('content_header')
    <h1>Sucursales</h1>
@stop

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Sucursal</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                  </div>
                  </div>
            
<div class="col-md-6">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telefono</label>
                    <input type="number" class="form-control" id="telefono" placeholder="Telefono">
                  </div>
                  </div>
                  
                  </div> <!-- /.row -->
                 
                  
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ciudad</label>
                    <input type="text" class="form-control" id="Ciudad" placeholder="Ciudad">
                  </div>
                  </div>
                  
                  <!-- select -->
                  <div class="col-md-6">
                  <div class="form-group">
                        <label>Municipio</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                      </div>
                  </div> <!-- /.row -->

                  <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Calle</label>
                    <input type="text" class="form-control" id="calle" placeholder="Calle">
                  </div>
                  </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">No.Interior</label>
                    <input type="number" class="form-control" id="interior" placeholder="No.Interior">
                  </div>
                  </div>
                  
                  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">No.Exterior</label>
                    <input type="number" class="form-control" id="exterior" placeholder="No.Exterior">
                  </div>
                  </div>

                  </div> <!-- /.row -->

                    

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Enviar</button>
                  <a href="/sucursal" class="btn btn-danger">Cancelar </a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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
