<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Login Page
Route::controller(AuthenticatedSessionController::class)->group(function() {
    Route::get('/', 'create')->name('login');
    Route::post('/', 'store');
});

