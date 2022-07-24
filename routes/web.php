<?php

use App\Http\Controllers\admin\pruebacontroler;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\admin\pruebacontroler;

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

// ruta inicial index
Route::get('/', function () {
    return view('welcome');
});

// ruta de contacto
Route::get('/escribeme', function () {
    return view('contacto');
})->name("contacto");// se agrega nombre a la ruta para que asi se imprima desde la pagina html

// ruta de prueba de envios de variables
Route::get('/custom', function () {
    $msj = "Este es un mensaje desde la ruta prrou"; // este es es un mensaje para despues sea enviado

    $data = ['msj'=>$msj , 'edad' => 23]; // este es un arreglo que se coloca para enviarlo a la vista desde el return

    return view('custom', $data); // lo que esta dentro del array es para enviar el mensaje en una variable para despues imprimirlo en la vista, 1 o mas variales
});

/// esta es una referencia de las rutas en laravel 5 de como mandar a llamar un controlador con una funcion
Route::POST('/guardAlum','alumno@guardaAlum')->name('guardaAlum'); // mo sirve en laravel 9

// forma para mandar a llamar un controlador desde la ruta conlaravel 9
// se coloca asi para mandar a llamar el cotrolador pero se tiene que referenciar primero en la parte superior
//Route::get('/prueba_admin',[pruebacontroler::class,'prueba']);

// se coloca asi para mandar a llamar el cotrolador pero se debe colocar toda la ruta del controlador
Route::get('/prueba_admin',[pruebacontroler::class,'prueba']);


