<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    
 public function showindex(){
    $flights = Flight::all();
    return view('welcome',['flights'=> $flights]);
 } 

 public function deleteFlight($id){
    $flight = Flight::findOrFail($id);
    $flight->delete();
    return redirect(route('showindex'));
 } 











}
