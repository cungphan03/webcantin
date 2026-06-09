<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;

// ĐĂNG KÝ
/*
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// ĐĂNG NHẬP
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
*/
// ĐĂNG XUẤT
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
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
Route::get('/thanhtoan', [DishController::class, 'thanhtoan'])
    ->middleware('auth');
Route::delete('/order/{id}', [DishController::class, 'delete'])->name('order.delete');
Route::post('/thanhtoan', [DishController::class, 'xulyThanhtoan'])
    ->middleware('auth')
    ->name('thanhtoan.xuly');