<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/custom', function () {
    $msj = "Este es un mensaje desde la ruta prrou"; // este es es un mensaje para despues sea enviado

    $data = ['msj'=>$msj , 'edad' => 23]; // este es un arreglo que se coloca para enviarlo a la vista desde el return

    return view('custom', $data); // lo que esta dentro del array es para enviar el mensaje en una variable para despues imprimirlo en la vista, 1 o mas variales
});

