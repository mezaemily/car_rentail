<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        return Rental::with(['car', 'driver', 'user'])->get();
    }

    public function store(Request $request)
    {
        return Rental::create($request->all());
    }

    public function show($id)
    {
        return Rental::with(['car', 'driver', 'user'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $rental = Rental::findOrFail($id);
        $rental->update($request->all());
        return $rental;
    }

    public function destroy($id)
    {
        Rental::destroy($id);
        return response()->noContent();
    }

    // 🔥 punto 5
    public function updateStatus(Request $request, $id)
    {
        $rental = Rental::findOrFail($id);
        $rental->status = $request->status;
        $rental->save();

        return $rental;
    }
}