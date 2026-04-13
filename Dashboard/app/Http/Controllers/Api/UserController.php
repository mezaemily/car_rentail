<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $users = User::with([
          'loyaltyLevel',
          'drivers',
          'rentals'])->get();
        return response()->json([
            "data" => $users,
            "status" => "success"
        ],200);
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
            'name'=>'required|min:3|max:30',
            'email'=>'required|email',
            'password'=>'required|min:4',
            'loyalty_points'=>'required|numeric',
            'loyalty_level_id'=>'required|numeric',
           
        ]);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
        
            $user->loyalty_points = $request->loyalty_points;
            $user->loyalty_level_id = $request->loyalty_level_id;

         
            $user->save();
            return response()->json([
                "data" => $user,
                "status" => "success"
            ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        if ($user == null){
            return response()->json([
                "message" => "usuario no encontrado"
            ],404);
        }
        return response()->json([
            "data" => $user,
            "status" => "success"
        ],200);
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
         $user = User::find($id);
        if ($user == null){
            return response()->json([
                "error" => "usuario no encontrado",
                "status" => "error"
            ],404);
        }
        $user->delete();
        return response()->json([
            "message" => "usuario eliminado",
            "status" => "success"
        ],204);
    }
}
