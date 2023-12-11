<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
USE Inertia\Inertia;

class CarController extends Controller
{
   
    public function index()
    {
        $cars = Car::all();
        return Inertia::render('Cars/Index',['cars' =>$cars]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'make'=> 'required|max:50',
            'model'=> 'required|max:100',
            'color'=> 'required|max:10',
        ]);
        $car = new Car($request->input());
        $car->save();
        return redirect('cars');
    }
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->fill($request->input())->saveOrFail();
        return redirect ('cars');
    }
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('cars');
        
    }
}
