<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;

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
    return view('pages.main');
})->name('index');


//doctors
Route::get('/Doctors', [DoctorsController::class,'showDoctors'])->name('showDoctors');
Route::delete('/Doctors/delete/{id}', [DoctorsController::class,'deleteDoctor'])->name('deleteDoctor');
Route::get('/Doctors/eddit/{id}', [DoctorsController::class,'edditDoctor'])->name('edditDoctor');
Route::post('/Doctors/edditDoctorChange/{id}', [DoctorsController::class,'edditDoctorChange'])->name('edditDoctorChange');







//Patients