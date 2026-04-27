<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PrintJob;
use Illuminate\Http\Request;

class PrintJobController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'booth_session_id' => 'required|exists:booth_sessions,id',
            'copies'           => 'integer|min:1|max:5',
        ]);

        $printJob = PrintJob::create([
            'booth_session_id' => $request->booth_session_id,
            'status'           => 'queued',
            'copies'           => $request->copies ?? 1,
        ]);

        return response()->json([
            'success' => true,
            'data'    => $printJob,
        ], 201);
    }

    public function finish($id)
    {
        $printJob = PrintJob::findOrFail($id);
        $printJob->update([
            'status'     => 'done',
            'printed_at' => now(),
        ]);

        $printJob->boothSession->update(['status' => 'completed']);

        return response()->json([
            'success' => true,
            'data'    => $printJob,
        ]);
    }
}
