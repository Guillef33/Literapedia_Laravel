<?php

use Illuminate\Support\Facades\Route;


use  App\Http\Controllers\LibreriaController;
use  App\Http\Controllers\HomeController;



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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/home/favorites', [App\Http\Controllers\HomeController::class, 'favorites'])->name('favorites');
Route::get('/home/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');




Route::get('/autores', [App\Http\Controllers\HomeController::class, 'autores'])->name('autores');

Route::get('/libros', [App\Http\Controllers\HomeController::class, 'libros'])->name('libros');
Route::get('/estadisticas', [App\Http\Controllers\HomeController::class, 'index'])->name('estadisticas');



Route::get('/librerias', [App\Http\Controllers\LibreriaController::class, 'index'])->name('librerias');
Route::get('/librerias/create', [App\Http\Controllers\LibreriaController::class, 'create'])->name('librerias.create');
Route::get('/librerias/{libreria}', [App\Http\Controllers\LibreriaController::class, 'show'])->name('libreria.category');


/* Creo pagina con el metodo anterior y sin clase
Route::get('libreria', function () {
    return "Esta es la pagina de la libreria";
});
*/
/* Creo paginas a traves de una variable

Route::get('librerias', function () {
    return "Esta es la pagina de los librerias";
});

Route::get('librerias/crear', function () {
    return "Aqui podras subir una nueva libreria";
});

Route::get('libreria/{libreria}', function ($libreria) {
    return "Bienvenido al libreria: $libreria";
});

Route::get('libreria/{libreria}/{categoria/}', function ($libro, $categoria = null) {

    if ($categoria) {
        return "Bienvenido a la libreria $libro, de la categoria $categoria";
    } else {
        return "Bienvenido a la libreria $libro";

    }
});
*/

