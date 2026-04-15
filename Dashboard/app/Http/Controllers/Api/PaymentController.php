<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Payment;
use Illuminate\Support\Facades\Hash;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::with([
            'rental'
        ])->get();
        return response()->json([
            "data" => $payments,
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
            'rental'        => 'required|numeric',
            'amount'           => 'required|numeric',
            'payment_method'   => 'required|string',
            'transaction_id'   => 'required|string',
            'status'           => 'required|string',
            'payment_date'     => 'required|date',
        ]);

        $payment = new Payment();
        $payment->rental_id = $request->rental_id;
        $payment->amount  = $request->amount;
        $payment->payment_method = $request->payment_method;
        $payment->transaction_id = $request->transaction_id;
        $payment->status         = $request->status;
        $payment->payment_date   = $request->payment_date;

        $payment->save();
        return response()->json([
            "data" => $payment,
            "status" => "success"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payment::find($id);
        if ($payment == null) {
            return response()->json([
                "message" => "pago no encontrado"
            ], 404);
        }
        return response()->json([
            "data" => $payment,
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
        $payment = Payment::find($id);
        if ($payment == null) {
            return response()->json([
                "error" => "pago no encontrado",
                "status" => "error"
            ], 404);
        }
        $payment->delete();
        return response()->json([
            "message" => "pago eliminado",
            "status" => "success"
        ], 204);
    }
}