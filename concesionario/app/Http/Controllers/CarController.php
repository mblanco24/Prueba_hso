<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\CarRequest;

/**
 * Class CarController
 * @package App\Http\Controllers
 */
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::paginate();

        return view('car.index', compact('cars'))
            ->with('i', (request()->input('page', 1) - 1) * $cars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $car = new Car();
        return view('car.create', compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        Car::create($request->validated());

        return redirect()->route('cars.index')
            ->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $car = Car::find($id);

        return view('car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $car = Car::find($id);

        return view('car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, Car $car)
    {
        $car->update($request->validated());

        return redirect()->route('cars.index')
            ->with('success', 'Car updated successfully');
    }

    public function destroy($id)
    {
        Car::find($id)->delete();

        return redirect()->route('cars.index')
            ->with('success', 'Car deleted successfully');
    }
}
