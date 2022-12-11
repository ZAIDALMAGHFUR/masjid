<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\masjidController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalSholatController;
use Symfony\Component\HttpKernel\Profiler\Profile;
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


Route::get('/', [HomeController::class, 'sholat']);

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'autenticating']) ->name('login');
Route::get('register', [AuthController::class, 'register']) ->name('register');
Route::post('register', [AuthController::class, 'registerProcess']);

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout']) ->name('logout');
    Route::get('dashboard', [DashboardController::class, 'dashboard']) ->name('dashboard');
    Route::get('infomasi', [masjidController::class, 'infomasi']);
    Route::get('edit-nama/{id}', [masjidController::class, 'edit']);
    Route::put('edit-nama/{id}', [masjidController::class, 'update']);
    Route::get('destroy/{id}', [masjidController::class, 'destroy']);
    Route::get('text', [TextController::class, 'text']);
    Route::get('add-text', [TextController::class, 'add']);
    Route::post('add-text', [TextController::class, 'store']);
    Route::get('edit-text/{id}', [TextController::class, 'edit']);
    Route::put('edit-text/{id}', [TextController::class, 'update']);
    Route::get('destroy/{id}', [TextController::class, 'destroy']);
    Route::get('dasbor', function () {
        return view('dasbor');
    });
    Route::get('profile', [UserController::class, 'profile']) ->name('profile');
});