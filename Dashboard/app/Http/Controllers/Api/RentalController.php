<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Rental;
use Illuminate\Support\Facades\Hash;
class RentalController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = Rental::with([
            'user',
            'car',
            'driver',
            'payments'
        ])->get();
        return response()->json([
            "data" => $rentals,
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
            'user'      => 'required|numeric',
            'car'       => 'required|numeric',
            'driver'    => 'required|numeric',
            'pickup_date'  => 'required|date',
            'return_date'  => 'required|date',
            'total_amount' => 'required|numeric',
            'status'       => 'required|string',
        ]);

        $rental = new Rental();
        // $user->loyalty_level_id = $request->loyalty_level_id;
       
        $rental->pickup_date  = $request->pickup_date;
        $rental->return_date  = $request->return_date;
        $rental->total_amount = $request->total_amount;
        $rental->status       = $request->status;

        $rental->user_id   = $request->user;
$rental->car_id    = $request->car;
$rental->driver_id = $request->driver;
        

        $rental->save();
        return response()->json([
            "data" => $rental,
            "status" => "success"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rental = Rental::find($id);
        if ($rental == null) {
            return response()->json([
                "message" => "renta no encontrada"
            ], 404);
        }
        return response()->json([
            "data" => $rental,
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
           $rental = Rental::find($id);

    if ($rental == null) {
        return response()->json([
            "message" => "renta no encontrada"
        ], 404);
    }

    $request->validate([
        'status' => 'required|string|in:pending,active,completed,cancelled',
    ]);

    $rental->status = $request->status;
    $rental->save();

    return response()->json([
        "data" => $rental,
        "status" => "success"
    ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rental = Rental::find($id);
        if ($rental == null) {
            return response()->json([
                "error" => "renta no encontrada",
                "status" => "error"
            ], 404);
        }
        $rental->delete();
        return response()->json([
            "message" => "renta eliminada",
            "status" => "success"
        ], 204);
    }
}