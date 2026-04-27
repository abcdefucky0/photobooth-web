<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'booth_session_id' => 'required|exists:booth_sessions,id',
            'method' => 'required|in:qris,cash',
            'amount' => 'required|integer'
        ]);

        $payment = Payment::create([
            'booth_session_id' => $request->booth_session_id,
            'method' => $request->method,
            'amount' => $request->amount,
            'status' => 'pending'
        ]);

        return response()->json([
            'status' => 'paid',
            'data' =>   $payment,
        ], 201);
    }

    public function confirm($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->update([
            'status' => 'paid',
            'paid_at' => now(),
        ]);

        $payment->boothSession()->update(['status' => 'active']);
        return response()->json([
            'success ' => true,
            'data' => $payment
        ]);
    }
}
