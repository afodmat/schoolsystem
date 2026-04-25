<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ApiRegisterController;
use App\Http\Controllers\v1\LoginController;
use App\Http\Controllers\v1\LogoutController;
use App\Http\Controllers\v1\PasswordResetController;

Route::prefix('v1')->group(function () {

    // Auth
    Route::post('/register', [ApiRegisterController::class, 'store']);
    Route::post('/login', [LoginController::class, 'store']);

    // Password reset
    Route::post('/forgot-password', [PasswordResetController::class, 'forgot']);
    Route::post('/reset-password', [PasswordResetController::class, 'reset']);

    // Protected routes
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/profile', [ApiProfileController::class, 'show']);
        Route::post('/profile/update', [ApiProfileController::class, 'update']);
        Route::post('/profile', [ApiUserController::class, 'index']);
        Route::post('/profile/show', [ApiUserController::class, 'show']);
        Route::post('/logout', [LogoutController::class, 'store']);
    });

});