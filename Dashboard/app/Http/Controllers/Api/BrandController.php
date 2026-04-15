<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Brand;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::with([
            'cars'
        ])->get();
        return response()->json([
            "data" => $brands,
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
            'name' => 'required|string',
            'img'  => 'required|string',
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->img  = $request->img;

        $brand->save();
        return response()->json([
            "data" => $brand,
            "status" => "success"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = Brand::find($id);
        if ($brand == null) {
            return response()->json([
                "message" => "marca no encontrada"
            ], 404);
        }
        return response()->json([
            "data" => $brand,
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
        $brand = Brand::find($id);
        if ($brand == null) {
            return response()->json([
                "error" => "marca no encontrada",
                "status" => "error"
            ], 404);
        }
        $brand->delete();
        return response()->json([
            "message" => "marca eliminada",
            "status" => "success"
        ], 204);
    }
}