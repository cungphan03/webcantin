<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
Route::get('/', [DishController::class, 'home'])->name('home');
Route::get('/home', [DishController::class, 'home']);
Route::get('/menu', [DishController::class, 'index']);
Route::get('/datmon/{id}', [DishController::class, 'datmon'])
    ->middleware('auth'); // chặn luôn tại đây
// Đăng nhập
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Đặt món (bắt buộc login)
Route::post('/datmon', [DishController::class, 'storeOrder'])
    ->middleware('auth')
    ->name('datmon.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
