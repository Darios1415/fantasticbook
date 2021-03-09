@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Genero</h1>
@stop

@section('content')
<<<<<<< HEAD

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
              <form action="{{route('guardarsucursal)}}" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                div class="form-group">
                    <label >Nombre</label>
                    @if($errors->first('nombre'))
              <p class='text-danger'>{{$errors->first('nombre')}}</p>
              @endif
                    <input type="text" class="form-control" id="nombre" value="{{old('nombre')}}" name="nombre"placeholder="Nombre">
                  </div>
                  </div>

            
<div class="col-md-6">
                  
                  <div class="form-group">
                  @if($errors->first('telefono'))
              <p class='text-danger'>{{$errors->first('telefono')}}</p>
              @endif
                    <label >Telefono</label>
                    <input type="number" class="form-control" id="telefono" value="{{old('telefono')}}" placeholder="Telefono">
                  </div>
                  </div>
                  
                  </div> <!-- /.row -->
                 
                  
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                  @if($errors->first('ciudad'))
              <p class='text-danger'>{{$errors->first('ciudad')}}</p>
              @endif
                    <label>Ciudad</label>
                    <input type="text" class="form-control" id="Ciudad" value="{{old('ciudad')}}"  placeholder="Ciudad">
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
                  @if($errors->first('calle'))
              <p class='text-danger'>{{$errors->first('calle')}}</p>
              @endif
                    <label>Calle</label>
                    <input type="text" class="form-control" id="calle"  value="{{old('calle')}}" placeholder="Calle">
                  </div>
                  </div>

                  <div class="col-md-4">
                  <div class="form-group">
                  @if($errors->first('interior'))
              <p class='text-danger'>{{$errors->first('interior')}}</p>
              @endif
                    <label>No.Interior</label>
                    <input type="number" class="form-control" id="interior" value="{{old('interior')}}" placeholder="No.Interior">
                  </div>
                  </div>
                  
                  <div class="col-md-4">
                  <div class="form-group">
                  @if($errors->first('exterior'))
              <p class='text-danger'>{{$errors->first('exterior')}}</p>
              @endif
                    <label>No.Exterior</label>
                    <input type="number" class="form-control" id="exterior" value="{{old('exterior')}}" placeholder="No.Exterior">
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
=======
 <form action="{{route('guardargenero')}}" method="POST">
<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title"> Detalle de Genero Literario</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
{{csrf_field()}}
      <div class="row">
        <div class="col-sm-8">
          <!-- text input -->
          <div class="form-group">
            <label>Ingresa el nombre del genero</label>
            <input type="text" class="form-control" name="nombreg"placeholder="Ingresa el nombre del genero literario ...">
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-sm-8">
          <!-- textarea -->
          <div class="form-group">
            <label>Descripcion del genero</label>
            <textarea class="form-control" rows="3" name="descripciong"placeholder="Descripción acerca del genero ..."></textarea>
          </div>
        </div>

      </div>



      <div class="row">
        <div class="col-sm-6">
          <!-- select -->
          <div class="form-group">
            <label>Subgenero</label>
            <select  name="nombresg" id="subgenero">
<option value="">escoge un subgenero</option>
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

>>>>>>> 17452e60b2b403247975cced69b1228218064ecf
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
