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
Route::get('variables', function () {
    $mensaje = 20;
    //funcion nativa de php para analizar el contenido de una variable
    //variable tipo de dato ,datos contenidos
    var_dump($mensaje);
    echo "<hr/>";
    $mensaje = "Hola instructor :D";
    var_dump($mensaje);
});

Route::get('arreglos', function () {
    //definir un arreglo en php
    $instructores = [
        "Ma" => "Maria",
        "A" => "Ana",
        "Jo" => "Jorge"
    ];
    echo "<pre>";
    print_r($instructores);
    var_dump($instructores);
    echo "</pre>";
});

Route::get('paises', function () {
    $paises = [
        "colombia" =>
        [
            "capital" => "Bogotá",
            "moneda" => "Pesos",
            "poblacion" => 51
        ],
        "Peru" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => 33.19
        ],
        "Paraguay" => [
            "capital" => "Asunción",
            "moneda" => "Guarani",
            "poblacion" => 7
        ]
    ];
    /*echo "<pre>";
    print_r($paises["Peru"]["moneda"]);
    echo "<pre>";*/

    //recorrer el areglo de paises

    /*foreach($paises as $nombre=>$pais){
        echo"<h1>$nombre<h1>";
        echo "<pre>";

    print_r($pais);
    echo "<pre>";
    echo"<hr/>";
    }*/

    foreach($paises as $indice=>$valor){
        echo"$indice";
        echo "<pre>";

    print_r($valor["capital"]);
    echo "<pre>";
    echo"<hr/>";
    }
});
