<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class FeedbackController extends Controller
{
    public function store(): JsonResponse
    {
        return response()->json(['message' => 'ok']);
    }
}
