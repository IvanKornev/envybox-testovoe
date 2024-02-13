<?php

namespace App\Factories\Contracts;

interface IFeedbackFactory
{
    /**
     * Обрабатывает обращение через форму обр.связи
     *
     * @param array $formBody
     * @return array
     */
    public function save(array $formBody): array;
}
