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

Auth::routes();

Route::get('/cms', 'CmsController@index')->name('cms');
Route::get('/directors', 'CmsController@gestorDirectors')->name('directors');
Route::get('/peliculas', 'CmsController@gestorPeliculas')->name('peliculas');
Route::get('/categorias', 'CmsController@gestorCategorias')->name('categorias');

Route::get('/home', 'HomeController@home');
//Route::get('/titulo', 'HomeController@buscarTitulo');
Route::get('/genero', 'HomeController@buscarGenero')->name('genero');
Route::get('/buscar', 'HomeController@buscar');
Route::get('/ficha/{id}', 'HomeController@fichaPelicula')->name('ficha_producto');

Route::get('/afegir-pelicula', 'PeliculaController@afegir')->name('afegir-pelicula');
Route::post('/guardar-pelicula', 'PeliculaController@guardar');
Route::post('/update-pelicula', 'PeliculaController@update');
Route::get('/editar-pelicula/{id}', 'PeliculaController@editar')->name('editar-pelicula');
Route::get('/eliminar/{id}', 'PeliculaController@eliminar')->name('eliminar');
Route::get('/confirmar/{id}', 'PeliculaController@confirmar')->name('confirmar');


Route::get('/afegir-categoria', 'CategoriaController@afegir')->name('afegir-categoria');
Route::post('/guardar-categoria', 'CategoriaController@guardar');
Route::post('/update-categoria', 'CategoriaController@update');
Route::get('/editar-categoria/{id}', 'CategoriaController@editar')->name('editar-categoria');
Route::get('/eliminar-categoria/{id}', 'CategoriaController@eliminar')->name('eliminar-categoria');





