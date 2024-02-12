<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

use App\Http\Requests\FeedbackRequest;

class FeedbackController extends Controller
{
    /**
     * Добавляет обращение через форму обр.связи
     *
     * @return JsonResponse
     */
    public function store(FeedbackRequest $request): JsonResponse
    {
        return response()->json(['message' => 'ok']);
    }
}
