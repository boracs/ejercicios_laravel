<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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

Route::get('/',[FormController::class,'showIndex'] );
Route::get('/edadform',[FormController::class,'showEdadform']);
Route::post('/edadform',[FormController::class,'showEdadform']);
Route::get('/nameform',[FormController::class,'showNameform'] );
Route::post('/showinfo/{name?}/{surbname?}',[FormController::class,'showinfo'] );
