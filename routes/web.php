<?php
// Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home'])->middleware('example');
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('contactanos', ['as' => 'contactos', 'uses'=>'PagesController@contact']);
Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludos'])->where('nombre',"[A-Za-z]+");
Route::post('contacto', 'PagesController@mensajes');