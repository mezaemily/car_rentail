<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::with([
            'brand',
            'rentals'
        ])->get();
        return response()->json([
            "data" => $cars,
            "status" => "success"
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valideted = $request->validate([
            'brand_id'      => 'required|numeric',
            'model'         => 'required|string',
            'year'          => 'required|numeric',
            'color'         => 'required|string',
            'license_plate' => 'required|string',
            'mileage'       => 'required|numeric',
            'lat'           => 'required|numeric',
            'lng'           => 'required|numeric',
            'is_premium'    => 'required|boolean',
            'rental_count'  => 'required|numeric',
            'daily_rate'    => 'required|numeric',
            'status'        => 'required|string',
        ]);

        $car = new Car();
        $car->brand_id      = $request->brand_id;
        $car->model         = $request->model;
        $car->year          = $request->year;
        $car->color         = $request->color;
        $car->license_plate = $request->license_plate;
        $car->mileage       = $request->mileage;
        $car->lat           = $request->lat;
        $car->lng           = $request->lng;
        $car->is_premium    = $request->is_premium;
        $car->rental_count  = $request->rental_count;
        $car->daily_rate    = $request->daily_rate;
        $car->status        = $request->status;

        $car->save();
        return response()->json([
            "data" => $car,
            "status" => "success"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::find($id);
        if ($car == null) {
            return response()->json([
                "message" => "auto no encontrado"
            ], 404);
        }
        return response()->json([
            "data" => $car,
            "status" => "success"
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        if ($car == null) {
            return response()->json([
                "error" => "auto no encontrado",
                "status" => "error"
            ], 404);
        }
        $car->delete();
        return response()->json([
            "message" => "auto eliminado",
            "status" => "success"
        ], 204);
    }
}
