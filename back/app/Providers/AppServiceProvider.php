<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Factories\Contracts\IFeedbackFactory;
use App\Factories\FeedbackFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Регистрирует фабрику обработчиков обр.связи
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(IFeedbackFactory::class, function ($app) {
            return new FeedbackFactory('database');
        });
    }
}
