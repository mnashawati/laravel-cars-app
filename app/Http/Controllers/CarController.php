<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    protected function validatedData()
    {
        return request()->validate([
            'make' => 'required',
            'model' => 'required',
            'colour' => 'required',
            'topSpeed' => 'required'
        ]);
    }
    
    public function index()
    {
        $cars = Car::all();
        
        return view('car.index', compact('cars'));
    }

    public function create()
    {
        return view('car.create'); 
    }

    public function store()
    {   
        Car::create($this->validatedData());

        return redirect('/cars');
    }

    public function show($carId)
    {   
        // we can remove the line below the comment and add the following to the method: 
        // "show(Car $car)" which should have the exact same variable name {car} in the Route.
        // will use it in edit, update below.
        $car = Car::findOrFail($carId); 

        return view('car.show', compact('car'));
    }

    public function edit(Car $car)
    {   
        return view('car.edit', compact('car'));
    }

    public function update(Car $car)
    {   
        $car->update($this->validatedData());

        return redirect('/cars');
    }

    public function destroy(Car $car)
    {   
        $car->delete();

        return redirect('/cars');
    }
}
