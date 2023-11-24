<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FlightController;
use \App\Http\Controllers\UsuarioController;
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

// flights 
Route::get('/',[FlightController::class,'showindex'])->name('showindex');

Route::delete('/delete/{id}',[FlightController::class,'deleteFlight'])->name('deleteFlight');


//users

Route::get('/usuarios',[UsuarioController::class,'showUsuarios'])->name('showUsuarios');


Route::delete('/usuarios/{id}',[UsuarioController::class,'deleteUsuarios'])->name('deleteUsuarios');

Route::post('/addUsuario',[UsuarioController::class,'addUsuario'])->name('addUsuario');

Route::get('/showUpdateUsuario/{id}',[UsuarioController::class,'showUpdateUsuario'])->name('showUpdateUsuario');

Route::post('/updateUsuario/{id}',[UsuarioController::class,'updateUsuario'])->name('updateUsuario');
