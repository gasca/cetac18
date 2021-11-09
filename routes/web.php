<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TecnicaController;
use App\Http\Controllers\MessagesController;


// cetac2021
//cetac2021.test = Route::get('/', funtion ) raiz del sitio
//cetac2021.test/contacto = Route::get('/contacto', funtion ) raiz del sitio clousere



/* Route::get('prueba/{id?}', function ($id = "0") { // pasar un parametro, en caso de no encontrar poner ? y definir por default
    return "hola ".$id;
}); */

/* Route::get('/', function () {
    $nombre = "lalo"; // crear variable
    return view('home')->with('nombre', $nombre);// retornar la variable 
})->name('home');
 */




 Route::view('/', 'home')->name('home');
 Route::get('/tecnica', [TecnicaController::class, 'index'])->name('tecnica');

 Route::view('/acerca', 'about')->name('about');
 Route::view('/contacto', 'contact')->name('contact');
 Route::post('contact',  [MessagesController::class, 'store']);