<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BoothSession;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SessionController extends Controller
{

    public function store()
    {
        $session = BoothSession::create([
            'session_code' => 'SNAP-' . strtoupper(Str::random(6)),
            'status' => 'waiting_payment'
        ]);

        return response()->json([
            'success' => true,
            'data' => $session,
        ], 201);
    }



    public function show($id)
    {
        $session = BoothSession::with(['template', 'payment', 'photos', 'printJob'])->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $session,
        ]);
    }


    public function start($id)
    {
        $session = BoothSession::findOrFail($id);
        $session->update([
            'status' => 'active',
            'started_at' => now(),
            'expired_at' => now()->addMinutes(3),
        ]);


        return response()->json([
            'success' => true,
            'data' => $session,
        ]);
    }



    public function updateTemplate(Request  $request, $id)
    {
        $request->validate(['template_id' => 'required|exists:templates,id']);

        $session =  BoothSession::findOrFail($id);
        $session->update(['template_id' => $request->template_id]);

        return response()->json([
            'success' => true,
            'data' => $session,
        ]);
    }



    public function updateFilter(Request $request, $id)
    {
        $request->validate(['filter' => 'required|string']);

        $session = BoothSession::findOrFail($id);
        $session->update(['filter' => $request->filter]);


        return response()->json([
            'success' => true,
            'data' => $session,
        ]);
    }
}
