<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\LoyaltyLevel;
use Illuminate\Support\Facades\Hash;

class LoyaltyLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loyaltyLevels = LoyaltyLevel::with([
            'users'
        ])->get();
        return response()->json([
            "data" => $loyaltyLevels,
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
            'name'                => 'required|string',
            'min_points'          => 'required|numeric',
            'discount_percentage' => 'required|numeric',
            'free_extra_hours'    => 'required|numeric',
        ]);

        $loyaltyLevel = new LoyaltyLevel();
        $loyaltyLevel->name                = $request->name;
        $loyaltyLevel->min_points          = $request->min_points;
        $loyaltyLevel->discount_percentage = $request->discount_percentage;
        $loyaltyLevel->free_extra_hours    = $request->free_extra_hours;

        $loyaltyLevel->save();
        return response()->json([
            "data" => $loyaltyLevel,
            "status" => "success"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $loyaltyLevel = LoyaltyLevel::find($id);
        if ($loyaltyLevel == null) {
            return response()->json([
                "message" => "nivel de lealtad no encontrado"
            ], 404);
        }
        return response()->json([
            "data" => $loyaltyLevel,
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
        $loyaltyLevel = LoyaltyLevel::find($id);
        if ($loyaltyLevel == null) {
            return response()->json([
                "error" => "nivel de lealtad no encontrado",
                "status" => "error"
            ], 404);
        }
        $loyaltyLevel->delete();
        return response()->json([
            "message" => "nivel de lealtad eliminado",
            "status" => "success"
        ], 204);
    }
}