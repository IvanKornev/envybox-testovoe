<?php

namespace App\Services;

use App\Services\Contracts\IFeedbackService;

class FeedbackEmailService implements IFeedbackService
{
    /**
     * Моковый метод сохранения обращения по email
     *
     * @param array $formBody
     * @return array
     */
    public function save(array $formBody): array
    {
        $savedFeedback = $formBody;
        return $savedFeedback;
    }
}
