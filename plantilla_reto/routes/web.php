<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivitiesController;
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
//homepage
Route::get('/', [ActivitiesController::class,'showInicio'])->name('showIndex');


//add activity
Route::get('/addActivitie', [ActivitiesController::class,'showAddActivitie'])->name('showAddActivitie');
Route::post('/addActivitie2', [ActivitiesController::class,'AddActivitie'])->name('addActivitie');


Route::post('/searchResults', [ActivitiesController::class,'searchActivitie'])->name('showResults');


//actv manager
Route::get('/ActivitiesManager', [ActivitiesController::class,'showActivitiesManager'])->name('showActivitiesManager');
Route::get('/showActivitiesManagerSearch', [ActivitiesController::class,'showActivitiesManagerSearch'])->name('showActivitiesManagerSearch');


//delete activity
Route::delete('/deleteActivitie/{id}', [ActivitiesController::class,'deleteActivitie'])->name('deleteActivitie');

//editactivity
Route::get('/showEditActivitie/{id}', [ActivitiesController::class,'showEditActivitie'])->name('showEditActivitie');
Route::put('/edditActivitie/{id}', [ActivitiesController::class,'edditActivitie'])->name('edditActivitie');

