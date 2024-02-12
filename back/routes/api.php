<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::resource('feedback', FeedbackController::class)->only(['store']);
