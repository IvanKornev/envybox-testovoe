<?php

namespace App\Services;

use App\Models\Feedback;
use App\Services\Contracts\IFeedbackService;

class FeedbackDatabaseService implements IFeedbackService
{
    public function save(array $formBody): array
    {
        $savedFeedback = Feedback::create($formBody);
        return $savedFeedback->toArray();
    }
}
