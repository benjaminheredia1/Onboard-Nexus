<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnboardingController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/onboarding', [OnboardingController::class, 'Get']);
Route::post('/onboarding', [OnboardingController::class, 'store']);