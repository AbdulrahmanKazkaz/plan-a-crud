<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\EmployeeController;


// Profile Page
Route::controller(ProfileController::class)->name('profile.')->group(function() {
    Route::get('/profile', 'edit')->name('edit');
    Route::patch('/profile', 'update')->name('update');
    Route::delete('/profile', 'destroy')->name('destroy');
});

Route::put('password', [PasswordController::class, 'update'])->name('password.update');

Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');


Route::resource('companies', CompanyController::class);
Route::resource('employees', EmployeeController::class);

