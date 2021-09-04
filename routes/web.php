<?php

use App\Http\Controllers\Auth\LoginUserController;
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

Route::get('account/register', [RegisterUserController::class, 'index'])->name('register');
Route::get('account/sign-in', [LoginUserController::class, 'index'])->name('login');

Route::get('/', [PagesController::class, 'index']);
Route::get('/products/single', [PagesController::class, 'show']);
