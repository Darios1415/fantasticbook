<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\SucursalController;
use  App\Http\Controllers\GenerosController;
use  App\Http\Controllers\MunicipioController;


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


//Sucursald
Route::resource('sucursals','App\Http\Controllers\SucursaldController');

//usuario
Route::resource('usuarios','App\Http\Controllers\UsuarioController');
Route::post('restaurarUsuario/{id}', 'App\Http\Controllers\UsuarioController@activeUser')->name('restaurarUsuario');
Route::delete('borrarUsuario/{id}', 'App\Http\Controllers\UsuarioController@forcedDestroy')->name('borrarUsuario');

//ventas
Route::get ('ventas', function(){
    return view('cruds.ventas');
});


//municipio
Route::get ('municipio', function(){
    return view('tablas.municipio');
});

//libros
Route::get ('altalibro',[LibrosController::class,'altalibro'])->name('altaempleado');
Route::post ('guardarlibro',[LibrosController::class,'guardarlibro'])->name('guardarlibro');
Route::get ('genero', function(){
    return view('cruds.genero');
});

Route::post('guardar',[GenerosController::class,"guardar"])->name ('guardar');

//libros
Route::get ('altalibro',[LibrosController::class,'altalibro'])->name('altaempleado');
Route::post ('guardarlibro',[LibrosController::class,'guardarlibro'])->name('guardarlibro');

//municipio
Route::resource('municipios','App\Http\Controllers\MunicipioController');


//Sucursald 
Route::get ('sucursald', function(){
    return view('tablas.sucursald');
});
Route::post ('guardarlibro',[LibrosController::class,'guardarlibro'])->name('guardarlibro');

