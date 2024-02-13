<?php

namespace App\Factories;

use App\Factories\Contracts\IFeedbackFactory;
use App\Repositories\FeedbackRepository;

use InvalidArgumentException;

class FeedbackFactory implements IFeedbackFactory
{
    const INVALID_TARGET_ERROR = 'Данные не могут быть переданы '
        . 'такому обработчику';

    private object $targetClass;
    private static array $availableTargets = [
        'database' => FeedbackRepository::class,
        'email' => FeedbackRepository::class,
    ];

    public function __construct(string $target = 'database')
    {
        $targetIsExist = in_array($target, self::$availableTargets);
        if ($targetIsExist) {
            throw new InvalidArgumentException(self::INVALID_TARGET_ERROR);
        }
        $targetClass = self::$availableTargets[$target];
        $this->targetClass = new $targetClass;
    }

    /**
     * Обрабатывает обращение через форму обр.связи
     *
     * @param array $formBody
     * @return array
     */
    public function save(array $formBody): array
    {
        $savedFeedback = $this->targetClass->save($formBody);
        return $savedFeedback;
    }
}
