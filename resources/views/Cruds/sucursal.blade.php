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
                    <input type="nombre" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                  </div>
                  </div>
            
<div class="col-md-6">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telefono</label>
                    <input type="telefono" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
                  </div>
                  </div>
                  
                  </div> <!-- /.row -->
                 
                  
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ciudad</label>
                    <input type="ciudad" class="form-control" id="exampleInputPassword1" placeholder="Ciudad">
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
                    <input type="calle" class="form-control" id="exampleInputPassword1" placeholder="Calle">
                  </div>
                  </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">No.Interior</label>
                    <input type="interior" class="form-control" id="exampleInputPassword1" placeholder="No.Interior">
                  </div>
                  </div>
                  
                  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">No.Exterior</label>
                    <input type="exterior" class="form-control" id="exampleInputPassword1" placeholder="No.Exterior">
                  </div>
                  </div>

                  </div> <!-- /.row -->

                    

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
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
    <script> console.log('Hi!'); </script>
@stop