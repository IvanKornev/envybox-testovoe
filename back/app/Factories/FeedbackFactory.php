<?php

namespace App\Factories;

use App\Factories\Contracts\IFeedbackFactory;
use InvalidArgumentException;

class FeedbackFactory implements IFeedbackFactory
{
    const INVALID_TARGET_ERROR = 'Данные не могут быть переданы '
        . 'такому обработчику';

    private object $targetClass;
    private static array $availableTargets = [
        'database' => null,
        'email' => null,
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
     * @return void
     */
    public function save(array $formBody): void
    {
        print_r($formBody);
    }
}
