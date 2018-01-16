<?php

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
    echo "<a href=". route('contactos') .">Contacto</a><br>";
    echo "<a href=". route('contactos') .">Contacto</a><br>";
    echo "<a href=". route('contactos') .">Contacto</a><br>";
    echo "<a href=". route('contactos') .">Contacto</a><br>";
    echo "<a href=". route('contactos') .">Contacto</a><br>";
});


Route::get('contactanos', ['as' => 'contactos', function(){
	return "Sección de contactos";
}]);

Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
	return "Saludos $nombre";
})->where('nombre',"[A-Za-z]+");