<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
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


//Sucursald
Route::resource('sucursals','App\Http\Controllers\SucursaldController');

//usuario
Route::resource('usuarios','App\Http\Controllers\UsuarioController');
Route::post('restaurarUsuario/{id}', 'App\Http\Controllers\UsuarioController@activeUser')->name('restaurarUsuario');
Route::delete('borrarUsuario/{id}', 'App\Http\Controllers\UsuarioController@forcedDestroy')->name('borrarUsuario');


//libros
Route::get ('altalibro',[LibrosController::class,'altalibro'])->name('altaempleado');
Route::post ('guardarlibro',[LibrosController::class,'guardarlibro'])->name('guardarlibro');
Route::get ('reportelibros',[LibrosController::class,'reportelibros'])->name('reportelibros');
Route::get ('desactivalibro/{idlibro}',[LibrosController::class,'desactivalibro'])->name('desactivalibro');
Route::get ('activarlibro/{idlibro}',[LibrosController::class,'activarlibro'])->name('activarlibro');
Route::get ('borrarlibro/{idlibro}',[LibrosController::class,'borrarlibro'])->name('borrarlibro');
Route::get ('eloquent',[LibrosController::class,'eloquent'])->name('eloquent');

//municipio
Route::resource('municipios','App\Http\Controllers\MunicipioController');

