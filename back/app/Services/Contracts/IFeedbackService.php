<?php

namespace App\Services\Contracts;

interface IFeedbackService
{
    /**
     * Сохраняет обращение через форму обр.связи
     *
     * @param array $formBody
     * @return array
     */
    public function save(array $formBody): array;
}
