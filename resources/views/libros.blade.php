@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><center>Registro de libros</center></h1>
@stop

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputnombre">Título</label>
                    <input type="text" class="form-control" id="inputnombre" placeholder="Nombre del libro" required minlength="6" maxlength="15">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputautor">Autor</label>
                    <input type="text" class="form-control" id="inputautor" placeholder="Nombre del autor">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputpaginas">Páginas:</label>
                    <input type="number" class="form-control" id="inputpaginas" placeholder="370" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputfechaP">Fecha de publicación:</label>
                    <input type="date" class="form-control" id="inputfechaP">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputidioma">Idioma:</label>
                    <select id="inputidioma" class="custom-select">
                      <option selected>Selecciona un idioma</option>
                      <option>Español</option>
                      <option>Inglés</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-2">
                    <label>Disponibilidad:</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Digital</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Fisico</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">Ambos</label>
                      </div>
                  </div>
                  <div class="form-group col-md-7">
                    <label for="Sinopsis">Sinópsis</label>
                    <textarea class="form-control" id="Sinopsis" rows="3"></textarea>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputprecio">Precio:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="number" class="form-control" id="inputprecio">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputgenero">Género:</label>
                    <select id="inputgenero" class="form-control">
                      <option selected>Elige el género</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputsubgen">Subgénero:</label>
                    <select id="inputsubgen" class="form-control">
                      <option selected>Elige un subgénero</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="InputFile">Archivo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="InputFile">
                        <label class="custom-file-label" for="InputFile">Selecciona el libro</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Subir</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                  <label for="InputFoto">Imágen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="InputFoto">
                        <label class="custom-file-label" for="InputFoto">Selecciona imágen de portada</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Subir</span>
                      </div>
                    </div>
                  </div>
                </div>
                <br><br>
                <div class="col-auto d-flex align-items-center">
                  <div class="btn-group">
                    <button class="btn btn-primary start">
                      <i class="fas fa-upload"></i>
                      <span>Subir</span>
                    </button>
                    <button data-dz-remove class="btn btn-danger delete">
                      <i class="fas fa-trash"></i>
                      <span>Cancelar</span>
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script type="text/javascript">
        let form = new Validation("register-form");
        // Validation Functions
        form.requireText("inputnombre", 5, 20, [" "], []);
        form.requireEmail("email", 4, 30, [" "], []);
        form.registerPassword("password", 6, 20, [" "], [], "confirm");
    </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/validacioneslib.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop