<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
Route::get('/', function () {
    return view('home');
});
Route::get('/menu', [DishController::class, 'index']);
Route::get('/datmon', function (){
    return view('datmon');
});
