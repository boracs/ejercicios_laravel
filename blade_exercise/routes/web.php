<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/dashboard', function () {
    $noticias = ['Noticia 1 ' =>'El ayuntamiento prohibe cantar',
                 'Noticia 2' => 'El rey esta potxolo',
                 'Noticia 3 ' => 'La nasa contrata al oso jogy '
                ];
    return view('dashboard', ['noticias' => $noticias]);
})->name('dashboard');


Route::get('/eventos', function () {
    return view('eventos');
})->name('eventos');