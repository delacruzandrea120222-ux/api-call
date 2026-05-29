<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::apiResource('quizzes', QuizController::class);