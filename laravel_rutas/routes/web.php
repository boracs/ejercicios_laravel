<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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


Route::get('/', function () {
    return " index ";
})->name('home.index');

//ruta normal con funcion anonima
Route::get('/contact',function(){
    return "contact";
})->name('home.contact');

/*

comentado para poder crear los grupos

//ruta con caracter(param) opcional en caso de que no haya que days_ago valga 0
Route::get('/recent-posts/{days_ago?}',function($days_ago=0){
    return "days $days_ago";
})->name('posts.recent.index');

//ruta con caracter (param) obligatorio
Route::get('/posts/{id}',function($id){
    return "el id es $id";
})->name('posts.show');

*/


//grupos

Route::name('posts.')->group(function(){

    Route::get('/recent-posts/{days_ago?}',[PostsController::class,'coment_date'])
        //meto condicion de que days_ago tenga que ser un digito.
    ->where(['days_ago'=>'[0-9]+'])->name('recent.index');

    Route::get('/posts/{id}',[PostsController::class,'coment_day_with_letter'])
        //meto condicion de que days_ago tenga que ser un caracter.
    ->where(['id'=>'[A-Za-z]'])->name('show');
});