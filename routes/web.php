<?php

use Illuminate\Support\Facades\Route;

use App\Models\Universidad;
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
    $uni = new  Universidad();
    $uni -> estudia = "UNIVERSIDAD POLITECNICA DE TECAMAC";
    $uni -> edad = "Tengo 19 años";
    $uni -> genero = "Masculino";
    $uni -> ciudad = "CIUDAD DE MEXICO";
    $uni -> pais = "Mexico";
    $uni -> estado = "Estado de Mexico";
    return view('blog.index',['uni' => $uni]); 

})-> name ('inicio');


Route::get('/prueba', function () {

    return view('prueba'); 

})-> name ('prueba');















Route::get('/saludo', function () {

    return view ('saludo'); 

})-> name ('saludo');

