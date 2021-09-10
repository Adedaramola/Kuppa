<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\LogoutUserController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::prefix('auth')->group(function () {
    Route::get('register', [RegisterUserController::class, 'index'])->name('register');
    Route::post('register', [RegisterUserController::class, 'store']);
    Route::get('sign-in', [LoginUserController::class, 'index'])
        ->name('login');
    Route::post('sign-in', [LoginUserController::class, 'login']);

    Route::get('forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');

    Route::post('logout', [LogoutUserController::class, '__invoke'])
        ->middleware('auth')
        ->name('logout');
});

Route::get('/', [PagesController::class, 'index']);

// Cart controllers
Route::get('cart', [CartController::class, 'index']);
Route::get('cart/checkout', [CartController::class, 'show']);
Route::post('cart/checkout', [CartController::class, 'checkout'])
    ->middleware('auth');


Route::group([
    'as' => 'admin.',
    'middleware' => ['auth', 'admin'],
    'prefix' => 'admin'
], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});
