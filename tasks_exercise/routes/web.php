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
    return view('index');
});

//dispaly tasks
Route::get('/showtasks', function () {
    return view('showTasks');
});

//create  tasks
Route::post('/createtasks', function () {
    return view('createTasks');
});

//delate  tasks
Route::get('/deletetasks', function () {
    return view('deleteTasks');
});