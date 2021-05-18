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

Route::get("variables" , function(){
    $mensaje = 20;
    //funcion nativa de php : analizar el contenido de una variable
    //variable: tipo de dato, datos contenidos
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "Hola 2242753";
    var_dump($mensaje);


});
route::get('arreglos',function(){
    //definir un arreglo en php
    //Tamaño: numero de elementos del arreglos es 3
    $estudiantes = ["AN"=> "Ana" , 
                    "MA" =>"Maria" ,
                    "JOR" => "Jorge" ];
    print_r($estudiantes);
    echo "</pre";
});

Route :: get('paises', function(){
    $paises= ["Colombia" =>[
                "capital" => "bogota",
                "moneda" => "peso",
                "poblacion" => 51
    ],
              "Peru" =>[
                  "capital" => "lima",
                  "moneda" => "soles",
                  "poblacion" => 33.19

               ],
              "paraguay"=> [
                    "capital" => "Asuncion",
                    "moneda"  => "Guarani",
                    "poblacion" => 7
              ],
              "Argentina"=>[
                    "capital" => "Buenos Aires",
                    "moneda" => "Peso Argentino",
                    "poblacion" => 44.94
                ],
                   ];
            //mostrar la vista de paises
    return view('paises')->with("naciones", $paises);
});