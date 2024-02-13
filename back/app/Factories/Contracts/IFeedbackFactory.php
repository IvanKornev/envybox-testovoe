<?php

namespace App\Factories\Contracts;

interface IFeedbackFactory
{
    /**
     * Обрабатывает обращение через форму обр.связи
     *
     * @return void
     */
    public function save(array $formBody): void;
}
