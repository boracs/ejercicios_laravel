<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\taskController;
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

Route::get('/index', [taskController::class,'showData'])->name('show');

Route::post('/index/{id}', [taskController::class,'deleteData'])->name('delete');

Route::post('/create', [taskController::class,'insertData'])->name('insert');

Route::get('/create', [taskController::class,'insertData'])->name('insertGet');

Route::get('/search', [taskController::class,'searchData'])->name('searchView');

Route::post('/search', [taskController::class,'searchData2'])->name('searchData');