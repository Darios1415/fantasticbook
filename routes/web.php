<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use  App\Http\Controllers\GenerosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get ('formulario', function(){
    return view('cruds.formulario');
});

Route::get ('tabla', function(){
    return view('tablas.general');
});

// pago
Route::get ('pago', function(){
    return view('cruds.pago');
});

//municipio
Route::get ('municipio', function(){
    return view('tablas.municipio');
});

//sucursal
Route::get ('sucursal', function(){
    return view('cruds.sucursal');
});

//usuario
Route::get ('reporte_usuarios', function(){
    return view('Cruds.Usuarios.index');
});
Route::get ('crear_usuario', function(){
    return view('Cruds.Usuarios.create');
});
Route::get ('editar_usuario', function(){
    return view('Cruds.Usuarios.edit');
});
Route::resource('usuarios','App\Http\Controllers\UsuarioController');
//ventas
Route::get ('ventas', function(){
    return view('cruds.ventas');
});

//libros
Route::get ('altalibro',[LibrosController::class,'altalibro'])->name('altaempleado');
Route::post ('guardarlibro',[LibrosController::class,'guardarlibro'])->name('guardarlibro');

//genero
Route::get ('genero', function(){
    return view('cruds.genero');
});
Route::post ('guardargenero',[GenerosController::class,'guardargenero'])->name('guardargenero');
// subgenero
Route::get ('subgenero', function(){
    return view('cruds.subgenero');
});
Route::post ('guardarsubgenero',[GenerosController::class,'guardarsubgenero'])->name('guardarsubgenero');
