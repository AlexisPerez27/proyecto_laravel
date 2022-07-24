<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// declaramos la ruta de los modelos a buscar
use App\Models\User;

//controlador de prueba
class pruebacontroler extends Controller
{
    //funcion de prueba
    public function prueba(){
        $user = User::find(1); // mandamos a buscar en el modelo el id

        var_dump($user); // imprimimos lo que nos trae la variable $user

        return view('welcome',['user' => $user]); // retornamos en la vista nuestra varibale para mostrarla en laravel 9

        //return view('welcome')->with('user',$user); // esto es con laravel 5 para retornar variables a la vista tambien sirve en laravel 9

        echo "Hola pvtos esto es una pruebita";
    }
}
