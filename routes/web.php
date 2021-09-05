<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\LogoutUserController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('account/register', [RegisterUserController::class, 'index'])->name('register');
    Route::post('account/register', [RegisterUserController::class, 'store']);
    Route::get('account/sign-in', [LoginUserController::class, 'index'])
        ->name('login');
    Route::post('account/sign-in', [LoginUserController::class, 'login']);

    Route::get('account/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');
});

Route::post('account/logout', [LogoutUserController::class, '__invoke'])->name('logout');

Route::middleware(['auth'])->group(function () {

});

Route::get('/', [PagesController::class, 'index']);
Route::get('/products/single', [PagesController::class, 'show']);
