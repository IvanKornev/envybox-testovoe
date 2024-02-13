<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

use App\Http\Requests\FeedbackRequest;
use App\Factories\Contracts\IFeedbackFactory;

class FeedbackController extends Controller
{
    private IFeedbackFactory $factory;

    public function __construct(IFeedbackFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * Добавляет обращение через форму обр.связи
     *
     * @return JsonResponse
     */
    public function store(FeedbackRequest $request): JsonResponse
    {
        $formBody = $request->validated();
        $this->factory->save($formBody);
        return response()->json([
            'message' => 'Обращение было успешно сохранено',
        ]);
    }
}
