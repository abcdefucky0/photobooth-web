<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Template;

class TemplateController extends Controller
{
    //

    public function index()
    {
        $templates = Template::where('is_active', true)->get();


        return response()->json([
            'success' => true,
            'data' => $templates,
        ]);
    }
}
