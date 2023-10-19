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

Route::get('/vista1', function () {
    return view('view1');
});

Route::get('/vista2', function () {;
    return view('view2', ['arrayfrutas' => ['platano','melon','manzana']]);
});

Route::get('/vista3/{id}', function ($id){
    $arrayfrutas = array(
        1 => 'manzana',
        2 => 'platano',
        3 => 'pera',
    );
    $valor = $arrayfrutas[$id] ?? 'no existe esa posicion';

    return view('view3', compact('valor'));
});

Route::get('/vista4/{id}', function ($id){
    $arrayfrutas = array(
        1 => 'manzana',
        2 => 'platano',
        3 => 'pera',
    );
    $valor = $arrayfrutas[$id] ?? 'no existe esa posicion';

    return view('view4', compact('valor'));
});