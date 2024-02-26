<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
    
//Definiendo una nueva ruta
//Podriamos esperar un parametro poniendolo entre {}/{nombre}
Route::get('/clases', function () {
    return 'Pagina de clases';
});

//Podriamos esperar un parametro poniendolo entre {}/{nombre}, este se tiene que especificar en la funcion tambien
//php se concatena con puntos

// Se pueden conseguir n cantidad de parametros mediante /{n1}/{n2} y que la funcion los espere  ($n1, $n2)

Route::get('/clases/{nombre}', function ($nombre) { //asi como estan especificadas la ruta obligatoriamente requerira 2 parametros, si no saltara error
     return 'Pagina de clase '.$nombre;
});

//para que un parametro sea opcional
Route::get('/clases/maestros/{nombre}/{apellido}', [HomeController::class, 'inicio']);

Route::get('/clases/{nombre}/{seccion?}', [HomeController::class, 'show']);  // hay que especificar como acceder al metodo llegando al controlador, '::class' le decimos que se dirija ahi
//si hacemos uso de un metodo dentro de un controlador hay que importar el controlador obs-> la rurta esta arriba del controlador

