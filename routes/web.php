<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'storeRegister']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/profile', [DashboardController::class, 'profile'])->middleware('auth');

Route::get('/manage-role', [DashboardController::class, 'manageRole'])->middleware('auth');

Route::post('/create-group', [DashboardController::class, 'storeGroup']);
Route::get('/message/{id}');