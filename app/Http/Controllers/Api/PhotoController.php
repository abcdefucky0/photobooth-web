<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'booth_session_id' => 'required|exists:booth_sessions,id',
            'photo' => 'required|image|max:5120',
            'order' => 'required|integer|in:1,2,3',
        ]);


        $path = $request->file('photo')->store('photos', 'public');


        $photo = Photo::create([
            'booth_session_id' => $request->booth_session_id,
            'file_path' => $path,
            'order' => $request->order
        ]);

        return response()->json([
            'success' => true,
            'data' => $photo,
        ], 201);
    }


    public function index($sessionId)
    {
        $photos = Photo::where('booth_session_id', $sessionId)->orderBy('order')->get();

        return response()->json([
            'success' => true,
            'data' => $photos,
        ]);
    }
}
