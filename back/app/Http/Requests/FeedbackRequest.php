<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    /**
     * Валидирует форму обратной связи
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'appeal' => 'required|string',
        ];
    }
}
