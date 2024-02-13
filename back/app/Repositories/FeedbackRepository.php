<?php

namespace App\Repositories;

use App\Models\Feedback;
use Exception;

class FeedbackRepository
{
    /**
     * Сохраняет обращение в БД
     *
     * @param array $formBody
     * @return array
     */
    public function save(array $formBody): array
    {
        try {
            $savedFeedback = Feedback::create($formBody);
        } catch (Exception $e) {
            print($e->getMessage());
        }
        return $savedFeedback->toArray();
    }
}
