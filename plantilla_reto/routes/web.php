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

Route::get('/', [ActivitiesController::class,'showInicio'])->name('showIndex');

Route::get('/addActivitie', [ActivitiesController::class,'showAddActivitie'])->name('showAddActivitie');

Route::post('/addActivitie2', [ActivitiesController::class,'AddActivitie'])->name('addActivitie');

Route::post('/searchResults', [ActivitiesController::class,'searchActivitie'])->name('showResults');

Route::get('/ActivitiesManager', [ActivitiesController::class,'showActivitiesManager'])->name('showActivitiesManager');

Route::get('/showActivitiesManagerSearch', [ActivitiesController::class,'showActivitiesManagerSearch'])->name('showActivitiesManagerSearch');

Route::delete('/deleteActivitie/{id}', [ActivitiesController::class,'deleteActivitie'])->name('deleteActivitie');

Route::get('/editActivitie/{id}', [ActivitiesController::class,'editActivitie'])->name('editActivitie');

