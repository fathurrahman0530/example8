<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessagesController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/profile/{id}', [DashboardController::class, 'profile'])->middleware('auth');
Route::post('/update-profile', [DashboardController::class, 'updateProfile']);

Route::get('/manage-role', [DashboardController::class, 'manageRole'])->middleware('auth');
Route::get('/form-edit-user/{id}', [DashboardController::class, 'editUser'])->middleware('auth');
Route::post('/user-edit', [DashboardController::class, 'updateUser']);

Route::post('/create-group', [DashboardController::class, 'storeGroup']);
Route::post('/join-group', [DashboardController::class, 'joinGroup']);
Route::post('/edit-group', [DashboardController::class, 'updateGroup']);
Route::post('/leave-group', [DashboardController::class, 'leaveGroup']);
Route::get('/delete-group/{id}', [DashboardController::class, 'deleteGroup'])->middleware('auth');
Route::post('/kick', [DashboardController::class, 'kickUser'])->middleware('auth');

Route::get('/message/{id}', [MessagesController::class, 'showMessage'])->middleware('auth');
Route::post('/send-message', [MessagesController::class, 'sendMessage']);