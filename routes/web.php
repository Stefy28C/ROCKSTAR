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
Route::get('variables' , function (){
    $mensaje = 20;
    //funcion nativa de php para analizar el contenido de una variable
    //variable tipo de dato ,datos contenidos
    var_dump($mensaje);
    echo "<hr/>";
    $mensaje ="Hola instructor :D";
    var_dump($mensaje);
} );

Route::get('arreglos', function(){
    //definir un arreglo en php
    $instructores=["Ma"=>"Maria",
    "A"=>"Ana",
    "Jo"=>"Jorge"];
    echo"<pre>";
    print_r($instructores);
    var_dump($instructores);
    echo"</pre>";
});
