<?php

use Illuminate\Support\Facades\Route;

//--------------------------------Route----------------------------------------//
Route::get('/','PagesC@index')->name('index');
Route:: get('Estudiantes', 'PagesC@data')->name('Estudiante');
Route:: get('Maestros', 'PagesC@rating')->name('rating') ;
Route:: get('Data', 'PagesC@create')->name('Dat.create') ;
Route::get('Data/{id}','PagesC@detalles')->name('Dat.dato');
Route:: get('edit/{id}', 'Pagesc@edit')->name('Dat.edit');
Route:: put('edit/{id}', 'Pagesc@update')->name('Dat.update');
Route::delete('eliminar/{id}', 'Pagesc@delete')->name('Dat.delete');
Route:: get('nuevo', 'PagesC@nuevo')->name('nuevo') ;
Route:: get('Enviar','PagesC@prueba')->name('prueba');