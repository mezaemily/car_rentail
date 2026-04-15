<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Driver;
use Illuminate\Support\Facades\Hash;
class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::with([
            'user',
            'rentals'
        ])->get();
        return response()->json([
            "data" => $drivers,
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
            'user_id'        => 'required|numeric',
            'license_number' => 'required|string',
            'license_img'    => 'required|string',
        ]);

        $driver = new Driver();
        $driver->user_id = $request->user_id;
        $driver->license_number = $request->license_number;
        $driver->license_img    = $request->license_img;

        $driver->save();
        return response()->json([
            "data" => $driver,
            "status" => "success"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $driver = Driver::find($id);
        if ($driver == null) {
            return response()->json([
                "message" => "conductor no encontrado"
            ], 404);
        }
        return response()->json([
            "data" => $driver,
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
        $driver = Driver::find($id);
        if ($driver == null) {
            return response()->json([
                "error" => "conductor no encontrado",
                "status" => "error"
            ], 404);
        }
        $driver->delete();
        return response()->json([
            "message" => "conductor eliminado",
            "status" => "success"
        ], 204);
    }
}